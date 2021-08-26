<?php namespace CartsGuru\CartsGuru;

/**
 * Template - Read a HTML file and replace variable
 *
 * @author Carts Guru
 * @copyright Copyright (c) Carts Guru
 * @version 1.0.0
 * @license LGPL-2.1
 *
 */

class Template
{

    /** @var string $filename      Name of file to render */
    private $filename;

    /** @var string $folder        Folder where find the file  */
    private $folder;

    /**
     * Template constructor
     *
     * @param string $id
     * @param string $folder
     * @return Template
     */
    public function __construct($id, $folder = __DIR__ . '/templates/')
    {
        $this->filename = $id . '.html';
        $this->folder = $folder;
    }

    /**
     * Render template from file and params
     *
     * @param object $params
     * @return string
     */
    public function render($params)
    {
        $patterns = array();
        $replacements = array();

        foreach ($params as $key => $value) {
            $patterns[] = '/{{' . $key . '}}/';
            $replacements[] = is_numeric($value) || is_string($value) ? $value : json_encode($value);
        }

        $content = file_get_contents($this->folder . $this->filename);
        $content = preg_replace($patterns, $replacements, $content);

        return $content;
    }
}
