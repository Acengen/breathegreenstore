<?php
### /offer/jc-d/_setup.php
error_reporting( E_ALL & ~E_NOTICE );
session_start();
store_ip_address();
$carry = "?" . $_SERVER["QUERY_STRING"];
define( "CARRY", $carry );
if( !empty( $_GET["transaction_id"] ) ){ $_SESSION["transaction_id"] = $_GET["transaction_id"]; }
if( !empty( $_GET["AFFID"] ) ){ $_SESSION["AFFID"] = $_GET["AFFID"]; }
if( !empty( $_GET["C1"] ) ){ $_SESSION["C1"] = $_GET["C1"]; }
if( !empty( $_GET["C2"] ) ){ $_SESSION["C2"] = $_GET["C2"]; }
if( !empty( $_GET["C3"] ) ){ $_SESSION["C3"] = $_GET["C3"]; }
if( !empty( $_GET["click_id"] ) ){ $_SESSION["click_id"] = $_GET["click_id"]; }
if( !empty( $_GET["utm_source"] ) ){ $_SESSION["utm_source"] = $_GET["utm_source"]; }
if( !empty( $_GET["utm_medium"] ) ){ $_SESSION["utm_medium"] = $_GET["utm_medium"]; }
if( !empty( $_GET["utm_campaign"] ) ){ $_SESSION["utm_campaign"] = $_GET["utm_campaign"]; }

### FUNNEL SETUP
	define( "DOMAIN", "https://breathegreenstore.com" );
	define( "FOLDER", "/fb/pure/offer/" );
	$folder = FOLDER;
	$productName = "";

### LIMELIGHT SETUP
	define( "INSTANCE" , "globalhealthsecure" );
	define( "USERNAME" , "www.globalhealth-secure.com" );
	define( "PASSWORD" , "D2EFRXKZycsgNs" );
	define( "CURRENCY", "$" );
	define( "CAMPAIGN", "2942" );
	define( "CANADA", "2944" );
	define( "SUPPORT_EMAIL" , "support@breathegreenstore.com" );
	define( "SUPPORT_PHONE" , "1(800)760-7015" );
	define( "COPYRIGHT" , "Breathe Green Store" );
	define( "LLCRMURL" , "https://" . INSTANCE . ".limelightcrm.com/admin/transact.php" );
	if( $_SESSION["usingPayPal"] == "YES" )
		{ define( "CHARGE_NOTICE" , "PAYPAL *MARGIN LTD" ); }
	else
		{ define( "CHARGE_NOTICE" , "TACTICAL SUPPLY 8668090004" ); }

### DETERMINE IF LIVE OR TEST PAYPAL
	if( strtoupper( $_GET["test"] ) != "YES" )
		{
			define( "PAYPAL_CAMPAIGN" , "2946" );
		}
		else
		{
			define( "PAYPAL_CAMPAIGN" , "1859" );
		}

### PRODUCT SETUP
	$products =
		[
			1 => [
				"id" => 2661,
				"name" => "Breathe Green PURE - 1 Purifier",
				"quantity" => 1,
				"free" => 0,
				"price" => 55.99,
				"ship_id" => 234,
				"ship_price" => 5.99,
				"10off" => 50.39,
				"15off" => 47.59,
				"plus10" => 64,
				"plus15" => 66,
				"crossedout" => 93.32,
				"savingpercent" => 40
			],
			2 => [
				"id" => 2662,
				"name" => "Breathe Green PURE - 2 Purifiers",
				"quantity" => 2,
				"free" => 0,
				"price" => 102.99,
				"ship_id" => 234,
				"ship_price" => 5.99,
				"10off" => 92.69,
				"15off" => 87.54,
				"plus10" => 67,
				"plus15" => 69,
				"crossedout" => 186.64,
				"savingpercent" => 45
			],
			3 => [
				"id" => 2663,
				"name" => "Breathe Green PURE - 3 Purifiers",
				"quantity" => 3,
				"free" => 0,
				"price" => 139.99,
				"ship_id" => 234,
				"ship_price" => 5.99,
				"10off" => 125.99,
				"15off" => 118.99,
				"plus10" => 70,
				"plus15" => 72,
				"crossedout" => 279.96,
				"savingpercent" => 50
			],
			4 => [
				"id" => 2664,
				"name" => "Breathe Green PURE - 4 Purifiers",
				"quantity" => 4,
				"free" => 0,
				"price" => 179.99,
				"ship_id" => 234,
				"ship_price" => 5.99,
				"10off" => 161.99,
				"15off" => 152.99,
				"plus10" => 71,
				"plus15" => 73,
				"crossedout" => 373.28,
				"savingpercent" => 52
			],
			5 => [
				"id" => 2665,
				"name" => "Breathe Green PURE - 5 Purifiers",
				"quantity" => 5,
				"free" => 0,
				"price" => 209.99,
				"ship_id" => 234,
				"ship_price" => 5.99,
				"10off" => 188.99,
				"15off" => 178.49,
				"plus10" => 73,
				"plus15" => 74,
				"crossedout" => 466.60,
				"savingpercent" => 55
			],
		];

### ADDON PRODUCT SETUP
	$addon = [
		"id" => 2671,
		"name" => "Breathe Green PURE - 1-Year Warranty",
		"price" => 9.97,
		"ship_id" => 207,
		"ship_price" => 0.00
	];

### UPSELL SETUP
$upsells =
	[
		1 => [
			"next_page" => "upsell2",
			"products" => [
				1 => [
					"id" => 2666,
					"name" => "Breathe Green PURE - SPECIAL EXTRA Purifier",
					"price" => 39.95,
					"ship_id" => 207,
					"ship_price" => 0.00
				],
			],
		],
		2 => [ 
			"next_page" => "thank-you",
			"products" => [
				1 => [
					"id" => 2667,
					"name" => "Breathe Green Charcoal Bags - 2 Bags (Free Shipping)",
					"price" => 19.95,
					"ship_id" => 207,
					"ship_price" => 0.00
				],
			],
		],
		3 => [
			"next_page" => "thanks-again",
			"products" => [
				1 => [
					"id" => 2669,
					"name" => "Breathe Green PURE - Inventory Extras Special",
					"price" => 99.95,
					"ship_id" => 207,
					"ship_price" => 0.00
				],
			],
		],
];

	### FILTER $_POST VARIABLES
		$safePost = filter_input_array(INPUT_POST);

### FUNCTIONS
	function store_ip_address()
		{
			if ( isset( $_SERVER["REMOTE_ADDR"] ) )
				{
					$_SESSION["ipAddress"] = $_SERVER["REMOTE_ADDR"];
				}
			elseif( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) )
				{
					$_SESSION["ipAddress"] = $_SERVER["HTTP_X_FORWARDED_FOR"];
				}
			elseif( isset( $_SERVER["HTTP_CLIENT_IP"] ) )
				{
					$_SESSION["ipAddress"] = $_SERVER["HTTP_CLIENT_IP"];
				}
			else
				{
					$_SESSION["ipAddress"] = "127.0.0.1";
				}
			$_SESSION["ipAddress"] = trim( $_SESSION["ipAddress"] , " " );
		}

	function curl_to_limelight( $parameters )
		{
			$channel = curl_init();
			curl_setopt( $channel , CURLOPT_URL, LLCRMURL );
			curl_setopt( $channel , CURLOPT_HEADER , 0 );
			curl_setopt( $channel , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt( $channel , CURLOPT_POST , 1 );
			curl_setopt( $channel , CURLOPT_POSTFIELDS , $parameters );
			$output = curl_exec( $channel );
			curl_close( $channel );
			parse_str( $output , $response );
			return $response;
		}

	function stored_in_session( $productId , $productPrice )
		{
			if( $_SESSION['shippingCountry'] == "CA" )
				{ $campaign = CANADA; }
			else
				{ $campaign = CAMPAIGN; }
			$order_data =
				[
					"username"
						=>	USERNAME,
					"password"
						=>	PASSWORD,
					"campaignId"
						=>	CAMPAIGN,
					"shippingId"
						=>	$_SESSION["shippingId"],
					"method"
						=>	"NewOrder",
					"tranType"
						=>	"Sale",
					"productId"
						=> $productId,
					"dynamic_product_price_".$productId
						=>	$productPrice,
					"AFFID"
						=>	$_SESSION["AFFID"],
					"SID"
						=>	$_SESSION["SID"],
					"C1"
						=>	$_SESSION["C1"],
					"C2"
						=>	$_SESSION["C2"],
					"C3"
						=>	$_SESSION["C3"],
					"click_id"
						=>	$_SESSION["click_id"],
					"utm_source"
						=>	$_SESSION["utm_source"],
					"utm_medium"
						=>	$_SESSION["utm_medium"],
					"utm_campaign"
						=>	$_SESSION["utm_campaign"],
					"transaction_id"
						=>	$_SESSION["transaction_id"],
					"creditCardType"
						=>	$_SESSION["creditCardType"],
					"creditCardNumber"
						=>	$_SESSION["creditCardNumber"],
					"expirationDate"
						=>	$_SESSION["expirationDate"],
					"CVV"
						=>	$_SESSION["CVV"],
					"shippingCity"
						=>	$_SESSION["shippingCity"],
					"shippingState"
						=>	$_SESSION["shippingState"],
					"shippingZip"
						=>	$_SESSION["shippingZip"],
					"shippingCountry"
						=>	$_SESSION["shippingCountry"],
					"shippingAddress1"
						=>	$_SESSION["shippingAddress1"],
					"billingAddress1"
						=>	$_SESSION["billingAddress1"],
					"billingSameAsShipping"
						=>	$_SESSION["billingSameAsShipping"],
					"billingCity"
						=>	$_SESSION["billingCity"],
					"billingState"
						=>	$_SESSION["billingState"],
					"billingZip"
						=>	$_SESSION["billingZip"],
					"billingCountry"
						=>	$_SESSION["billingCountry"],
					"email"
						=>	$_SESSION["email"],
					"firstName"
						=>	$_SESSION["firstName"],
					"lastName"
						=>	$_SESSION["lastName"],
					"phone"
						=>	$_SESSION["phone"],
					"ipAddress"
						=>	$_SESSION["ipAddress"]
				];
			if( !empty( $_SESSION["prospectId"] ) )
				{
					$order_data["method"] = "NewOrderWithProspect";
					$order_data["prospectId"] = $_SESSION["prospectId"];
					unset( $_SESSION["prospectId"] );
				}
			if( !empty( $_SESSION["gatewayId"] ) )
				{
					$order_data["forceGatewayId"] = $_SESSION["gatewayId"];
				}
			return $order_data;
		}

	function get_cc_type( $cc )
		{
			$cc_first_digit = substr( $cc , 0 , 1 );
			switch( $cc_first_digit )
				{
					case "3":
						$cc_type = "amex";
						break;
					case "5":
						$cc_type = "master";
						break;
					case "6":
						$cc_type = "discover";
						break;
					default:
						$cc_type = "visa";
						break;
				}
			return $cc_type;
		}

	function scuttle( $problem , $terminate = true )
		{
			echo "<pre>";
			print_r( $problem );
			echo "</pre>";
			if( $terminate == true )
				{ die(); }
		}

	function forward( $where )
		{
			header( "Location: " . FOLDER . $where . ".php" . CARRY );
			exit();
		}
