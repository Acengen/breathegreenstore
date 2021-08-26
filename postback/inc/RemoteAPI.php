<?php
class RemoteAPI
{
    /** @var string $auth_key     Auth token sent to the api  */
    private $auth_key;

    /** @var string $options      Request options  */
    public $options;

    /** @var string $response     Response body, populated after execution */
    public $response;

    /** @var string $headers     Parsed reponse header object, populated after execution */
    public $headers;

    /** @var string $response     Response info object, populated after execution */
    public $info;

    /** @var string $response     Response error string, populated after execution */
    public $error;
                   
    /** @var string $response      Decoded response body, Populated as-needed */
    public $decoded_response;

    /**
    * RemoteAPI constructor
    *
    * @param string $auth_key       Auth token sent to the api
    * @param array $options      Request options
    * @return Template
    */
    public function __construct($auth_key = '', $options = array())
    {
        $this->auth_key = $auth_key;
        $default_options = array(
            'headers' => array(
                'x-auth-key' => $auth_key,
                'Content-Type' => 'application/json'
            ),
            'parameters' => array(),
            'curl_options' => array(),
            'user_agent' => "CG PHP Client",
            'base_url' => null,
            'format' => null,
            'format_regex' => "/(\w+)\/(\w+)(;[.+])?/",
            'decoders' => array(
                'json' => 'json_decode',
                'php' => 'unserialize'
            ),
            'username' => null,
            'password' => null
        );
        $this->options = array_merge($default_options, $options);
        if (array_key_exists('decoders', $options)) {
            $this->options['decoders'] = array_merge($default_options['decoders'], $options['decoders']);
        }
    }

    /**
     * Set a request option
     *
     * @param string $key Option id
     * @param mixed $value Option value
     */
    public function set_option($key, $value)
    {
        $this->options[$key] = $value;
    }

    /**
    * Do GET on Carts Guru api
    * @param string $path           ex /orders,/carts
    * @param array $parameters      Query or body parameter
    * @param boolean $sync          Wait response
    * @param array $headers         Additionnal headers
    * @return RemoteAPI RemoteAPI   with initialization
    */
    public function get($path, $parameters = array(), $sync = false, $headers = array())
    {
        return $this->execute($path, 'GET', $parameters, $sync, $headers);
    }

    /**
    * Do POST on Carts Guru api
    * @param string $path           ex /orders,/carts
    * @param array $parameters      Query or body parameter
    * @param boolean $sync          Wait response
    * @param array $headers         Additionnal headers
    * @return RemoteAPI RemoteAPI   with initialization
    */
    public function post($path, $parameters = array(), $sync = false, $headers = array())
    {
        return $this->execute($path, 'POST', $parameters, $sync, $headers);
    }

    /**
    * Call Carts Guru api
    * @param string $path           ex /orders,/carts
    * @param string $method         HTTP method: GET, POST...
    * @param array $parameters      Query or body parameter
    * @param boolean $sync          Wait response
    * @param array $headers         Additionnal headers
    * @return RemoteAPI RemoteAPI   with initialization
    */
    public function execute($path, $method = 'GET', $parameters = array(), $sync = false, $headers = array())
    {
        $client = clone $this;
        $client->url = 'https://api.carts.guru' . $path;
        $client->handle = curl_init();
        $curlopt = array(
            CURLOPT_HEADER => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT => $client->options['user_agent'],
            CURLOPT_SSL_VERIFYPEER => false
        );
        if (! $sync) {
            if (array_key_exists('async_alternative_config', $client->options) && $client->options['async_alternative_config']) {
                $curlopt[CURLOPT_NOSIGNAL] = 1;
                $curlopt[CURLOPT_TIMEOUT_MS] = 50;
            } else {
                $curlopt[CURLOPT_FRESH_CONNECT] = true;
                $curlopt[CURLOPT_TIMEOUT] = 1;
            }
        }
        if ($client->options['username'] && $client->options['password']) {
            $curlopt[CURLOPT_USERPWD] = sprintf("%s:%s", $client->options['username'], $client->options['password']);
        }
        
        if (is_array($parameters)) {
            $parameters = array_merge($client->options['parameters'], $parameters);
            $parameters_string = json_encode($parameters);
            $headers['Content-Length'] = strlen($parameters_string);
        } else {
            $parameters_string = (string) $parameters;
        }
        
        if (count($client->options['headers']) || count($headers)) {
            $curlopt[CURLOPT_HTTPHEADER] = array();
            $headers = array_merge($client->options['headers'], $headers);
            foreach ($headers as $key => $value) {
                $curlopt[CURLOPT_HTTPHEADER][] = sprintf("%s:%s", $key, $value);
            }
        }
        
        if ($client->options['format']) {
            $client->url .= '.' . $client->options['format'];
        }
        
        // Allow passing parameters as a pre-encoded string (or something that
        // allows casting to a string). Parameters passed as strings will not be
        // merged with parameters specified in the default options.
        if ($method == 'POST') {
            $curlopt[CURLOPT_POST] = true;
            $curlopt[CURLOPT_POSTFIELDS] = $parameters_string;
        } elseif ($method != 'GET') {
            $curlopt[CURLOPT_CUSTOMREQUEST] = $method;
            $curlopt[CURLOPT_POSTFIELDS] = $parameters_string;
        } elseif ($parameters_string) {
            $client->url .= strpos($client->url, '?') ? '&' : '?';
            $client->url .= $parameters_string;
        }
        
        if ($client->options['base_url']) {
            $option_base_url_sub = substr($client->options['base_url'], - 1);
            if ($client->url[0] != '/' && $option_base_url_sub != '/') {
                $client->url = '/' . $client->url;
            }
            $client->url = $client->options['base_url'] . $client->url;
        }
        $curlopt[CURLOPT_URL] = $client->url;
        
        if ($client->options['curl_options']) {
            // array_merge would reset our numeric keys.
            foreach ($client->options['curl_options'] as $key => $value) {
                $curlopt[$key] = $value;
            }
        }
        curl_setopt_array($client->handle, $curlopt);
        $client->parseResponse(curl_exec($client->handle));
        $client->info = (object) curl_getinfo($client->handle);
        $client->error = curl_error($client->handle);
        
        curl_close($client->handle);
        return $client;
    }


    /**
    * Read the $response to set header and response fields
    * @param string $response cUrl response result
    */
    public function parseResponse($response)
    {
        $headers = array();
        
        // Check $response is a string object
        if (!is_string($response)) {
            $this->headers = $headers;
            $this->response = $response;
            return;
        }

        $http_ver = strtok($response, "\n");
        
        while ($line = strtok("\n")) {
            if (strlen(trim($line)) == 0) {
                break;
            }
            
            list($key, $value) = explode(':', $line, 2);
            $key = trim(strtolower(str_replace('-', '_', $key)));
            $value = trim($value);
            if (empty($headers[$key])) {
                $headers[$key] = $value;
            } elseif (is_array($headers[$key])) {
                $headers[$key][] = $value;
            } else {
                $headers[$key] = array(
                    $headers[$key],
                    $value
                );
            }
        }
        
        $this->headers = (object) $headers;
        $this->response = strtok("");
    }

    /**
    * Lookup the option format or the header content_type to find the format
    * Exception will be raise if parseResponse has not been called
    */
    public function getResponseFormat()
    {
        if (! $this->response) {
            throw new Exception("A response must exist before it can be decoded.");
        }
        
        // User-defined format.
        if (! empty($this->options['format'])) {
            return $this->options['format'];
        }
        
        // Extract format from response content-type header.
        if (! empty($this->headers->content_type)) {
            if (preg_match($this->options['format_regex'], $this->headers->content_type, $matches)) {
                return $matches[2];
            }
        }
        
        throw new Exception("Response format could not be determined.");
    }

    /**
     * Parse the response
     */
    public function decodeResponse()
    {
        if (empty($this->decoded_response)) {
            $format = $this->getResponseFormat();
            if (! array_key_exists($format, $this->options['decoders'])) {
                throw new Exception($format.' is not a supported ' . 'format, register a decoder to handle this response.');
            }
            
            $this->decoded_response = call_user_func($this->options['decoders'][$format], $this->response);
        }
        
        return $this->decoded_response;
    }
}
