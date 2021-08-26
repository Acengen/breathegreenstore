<?php

/*

if( !isset( $_SERVER["HTTPS"] ) || $_SERVER["HTTPS"] != "on" )

	{

    header( "Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301 );

    exit();

	}

*/

if( substr_count( $_SERVER["HTTP_ACCEPT_ENCODING"] , "gzip" ) )

	{ ob_start( "ob_gzhandler" ); }

else

	{ ob_start(); }

session_start();

$trackarray = 

	[ "AFID", "AFFID", "SID", "click_id", "C1", "C2", "C3", "utm_source", "utm_medium", "utm_campaign" ];

foreach( $trackarray as $track )

	{

		if( !empty( $_GET[$track] ) )

			{ $_SESSION[$track] = $_GET[$track]; }

	}

if( empty( $_SESSION['token'] ) )

	{ $_SESSION['token'] = bin2hex( openssl_random_pseudo_bytes( 32 ) ); }

//error_reporting( E_ALL & ~E_NOTICE );

$folder = "/";

$GLOBALS['folder'] = "/";

$GLOBALS['qs'] = $_SERVER['QUERY_STRING'];



define( "INSTANCE", "globalhealthsecure" );

define( "USERNAME", "www.globalhealth-secure.com" );

define( "PASSWORD", "D2EFRXKZycsgNs" );

define( "LLCRMURL", "https://" . INSTANCE . ".limelightcrm.com/admin/transact.php" );

define( "COUPONS", 

	[

		"TESTSECRET10" => "10",

		"TESTSECRET15" => "15",

		"TESTSECRET20" => "20",

		"EOM20"        => "20",

		"HUMP15DAY"    => "15",

		"VIP10"        => "10",

	]);



require_once( $_SERVER["DOCUMENT_ROOT"] . $folder . "inc/flight/Flight.php" );



require_once( $_SERVER["DOCUMENT_ROOT"] . $folder . "inc/geoipcity.php" );



store_ip_address();



# ----------------------------------------------------------- [ INDEX

Flight::route( "/" , function(){



	Flight::render( "lander" );

	exit();



die( "err.lander" ); });

# ]







# ----------------------------------------------------------- [ INDEX

Flight::route( "/coupon" , function(){



	header( 'Content-Type: application/json' );



	$couponcode = strtoupper( $_POST['coupon'] );



	if( array_key_exists( $couponcode, COUPONS ) )

		{

			$discount = COUPONS[$couponcode];

		}

	else

		{

			$discount = "NONE";

		}



	foreach( $_SESSION['cart'] as $product )

		{

			$total += $product['price'];

		}



	$total = number_format( $total, 2 );

	$disval = floor( ( $total * ( $discount / 100 ) ) * 100 ) /100;



	if( $_SESSION['ship599'] )

		{

			$newtot = number_format( ( $total + 5.99 ) - $disval, 2 );

		}

	else

		{

			$newtot = number_format( $total - $disval, 2 );

		}



	$_SESSION['discountTotal'] = $disval;



	echo json_encode(

			[

				'okay' => 'okay',

				'discount'=> $discount,

				'disval'=> $disval,

				'newtot'=> $newtot

			]

		);

	exit();



die( "err.coupon" ); });

# ]









# ----------------------------------------------------------- [ ARTICLES

Flight::route( "/articles" , function(){



	Flight::render( "articles" );

	exit();



die( "err.articles" ); });

# ]









# ----------------------------------------------------------- [ ARTICLES

Flight::route( "/articles/grandma" , function(){





/*

  $gi = geoip_open( "/home/breathegreenstor/public_html/inc/GeoLiteCity.dat",GEOIP_STANDARD );

  require( $_SERVER["DOCUMENT_ROOT"] . "/inc/geoipregionvars.php" );



$ipaddress = $_SESSION["ipAddress"];



if( $ipaddress != '127.0.0.1' )

  {

    $record = geoip_record_by_addr( $gi, $ipaddress );

    $display = ' ' . $GEOIP_REGION_NAME[$record->country_code][$record->region] . ' ';

    geoip_close($gi);

  }

else

  { $display = ' '; }

*/



$display = " ";



	Flight::render( "grandma", [ "display" => $display ] );

	exit();



die( "err.grandma" ); });

# ]













# ----------------------------------------------------------- [ ARTICLES

Flight::route( "/articles/cat-lady-fix/2" , function(){



	Flight::render( "cat-lady-fix2" );

	exit();



die( "err.cat-lady-fix2" ); });

# ]





# ----------------------------------------------------------- [ ARTICLES

Flight::route( "/articles/shoe-rack-fix/2" , function(){



	Flight::render( "shoe-rack-fix2" );

	exit();



die( "err.shoe-rack-fix2" ); });

# ]







# ----------------------------------------------------------- [ ARTICLES

Flight::route( "/articles/simple-odor-solution/2" , function(){



	Flight::render( "simple-odor-solution2" );

	exit();



die( "err.simple-odor-solution2" ); });

# ]







# ----------------------------------------------------------- [ ARTICLE

Flight::route( "/articles(/@article)" , function( $article ){



	Flight::render( $article );

	exit();



die( "err.article" ); });

# ]









# ----------------------------------------------------------- [ CAREERS

Flight::route( "/careers" , function(){



	Flight::render( "careers" );

	exit();



die( "err.careers" ); });

# ]







/*

# ----------------------------------------------------------- [ testcase

Flight::route( "/testcase" , function(){



	scuttle($_SESSION);

	exit();



die( "err.testcase" ); });

# ]

*/







# ----------------------------------------------------------- [ ABOUT

Flight::route( "/about" , function(){



	Flight::render( "about" );

	exit();



die( "err.about" ); });

# ]







# ----------------------------------------------------------- [ CONTACT

Flight::route( "/contact" , function(){



	Flight::render( "contact" );

	exit();



die( "err.contact" ); });

# ]







# ----------------------------------------------------------- [ SHOP

Flight::route( "/shop" , function(){



	Flight::render( "shop" );

	exit();



die( "err.shop" ); });

# ]







# ----------------------------------------------------------- [ CART

Flight::route( "/cart" , function(){



	count_cart();



if( empty( $_SESSION['cart'] ) || !is_array( $_SESSION['cart'] ) )

	{

		//scuttle( "no cart" );

		em( "There are no items in your cart." );

		forward();

	}



	foreach( $_SESSION['cart'] as $product )

		{

			$total += $product['price'];

		}



	$total = number_format( $total, 4 );





	Flight::render( "cart",

			[

				"count" => $count,

				"total" => $total

			]

		);

	exit();



die( "err.cart" ); });

# ]







# ----------------------------------------------------------- [ CHARCOAL-INSERTS

Flight::route( "/charcoal-inserts" , function(){



	Flight::render( "charcoal-inserts" );

	exit();



die( "err.charcoal-inserts" ); });

# ]







# ----------------------------------------------------------- [ ADD CHARCOAL-INSERTS

Flight::route( "/add-charcoal-inserts" , function(){



	Flight::render( "add-charcoal-inserts" );

	exit();



die( "err.add-charcoal-inserts" ); });

# ]





# ----------------------------------------------------------- [ CHARCOAL-BAGS

Flight::route( "/charcoal-bags" , function(){



	Flight::render( "charcoal-bags" );

	exit();



die( "err.charcoal-bags" ); });

# ]







# ----------------------------------------------------------- [ ADD CHARCOAL-BAGS

Flight::route( "/add-charcoal-bags" , function(){



	Flight::render( "add-charcoal-bags" );

	exit();



die( "err.add-charcoal-bags" ); });

# ]







# ----------------------------------------------------------- [ MITE-FIGHTER

Flight::route( "/mite-fighter" , function(){



	Flight::render( "mite-fighter" );

	exit();



die( "err.mite-fighter" ); });

# ]







# ----------------------------------------------------------- [ ADD MITE-FIGHTER

Flight::route( "/add-mite-fighter" , function(){



	Flight::render( "add-mite-fighter" );

	exit();



die( "err.add-mite-fighter" ); });

# ]







# ----------------------------------------------------------- [ PURE

Flight::route( "/pure" , function(){



	Flight::render( "pure" );

	exit();



die( "err.pure" ); });

# ]







# ----------------------------------------------------------- [ ADD PURE

Flight::route( "/add-pure" , function(){



	Flight::render( "add-pure" );

	exit();



die( "err.add-pure" ); });

# ]







# ----------------------------------------------------------- [ TERMS

Flight::route( "/legal/terms" , function(){



	Flight::render( "legal/terms" );

	exit();



die( "err.terms" ); });

# ]







# ----------------------------------------------------------- [ PRIVACY

Flight::route( "/legal/privacy" , function(){



	Flight::render( "legal/privacy" );

	exit();



die( "err.privacy" ); });

# ]







# ----------------------------------------------------------- [ SHIPPING

Flight::route( "/legal/shipping" , function(){



	Flight::render( "legal/shipping" );

	exit();



die( "err.shipping" ); });

# ]







# ----------------------------------------------------------- [ RETURNS

Flight::route( "/legal/returns" , function(){



	Flight::render( "legal/returns" );

	exit();



die( "err.returns" ); });

# ]







# ----------------------------------------------------------- [ REMOVE

Flight::route( "/remove/@product/@quantity" , function( $product, $quantity ){



	foreach( $_SESSION['cart'] as $key => $value )

		{

			if( $product == $value['product'] && $quantity == $value['quantity'] )

				{

					$foundit = true;

					unset( $_SESSION['cart'][$key] );

					break;

				}

		}



	if( !$foundit ){ em( "Product not found!" ); }



	if( empty( $_SESSION['cart'] ) )

		{ forward( "shop" ); }

	else

		{ sm( "Product removed from cart." );forward( "cart" ); }



die( "err.remove" ); });

# ]







# ••••••••••••••••••••••••••••••••••••••••••••••••••••••••••• [ REMOVE

Flight::route( "/clear/@product/@quantity" , function( $product, $quantity ){



	foreach( $_SESSION['cart'] as $key => $value )

		{

			if( $product == $value['product'] && $quantity == $value['quantity'] )

				{

					$foundit = true;

					unset( $_SESSION['cart'][$key] );

					break;

				}

		}



	if( !$foundit ){ em( "Product not found!" ); }



	if( empty( $_SESSION['cart'] ) )

		{ forward( "shop" ); }

	else

		{ sm( "Product removed from cart." );forward( "checkout" ); }



die( "err.clear" ); });

# ]







# ----------------------------------------------------------- [ ADD-TO-CART

Flight::route( "/add-to-cart" , function(){



	$safePost = filter_input_array( INPUT_POST );



	$product = $safePost['product'];

	$quantity = (int)$safePost['package'];

	$free = 0;



	switch( $quantity )

		{

			case 2:

				$free = 1;

				$price = 39.95;

				break;

			case 3:

				$free = 2;

				$price = 59.95;

				break;

			case 5:

				$free = 5;

				$price = 99.95;

				break;

		}



	$x = 0;

	$newproduct = true;





	if( is_array( $_SESSION['cart'] ) )

		{

			foreach( $_SESSION['cart'] as $item )

				{

					if( $item['product'] == $product )

						{

							$_SESSION['cart'][$x]['quantity'] = $quantity;

							$_SESSION['cart'][$x]['free'] = $free;

							$_SESSION['cart'][$x]['price'] = $price;

							$_SESSION['cart'][$x]['regularly'] = $safePost['regularly'];

							$_SESSION['cart'][$x]['displayname'] = $safePost['displayname'];

							$newproduct = false;

							break;

						}

					$x += 1;

				}

		}



	if( $newproduct )

		{

			$truearray = 

				[

					"product" => $product,

					"quantity" => $quantity,

					"free" => $free,

					"price" => $price,

					"regularly" => $safePost['regularly'],

					"displayname" => $safePost['displayname']

				];

			$_SESSION['cart'][] = $truearray;

		}





//scuttle( $_SESSION );



	sm( "{$safePost['displayname']} x{$quantity}(+{$free}) added to your cart!" );



	forward( "cart" );



die( "err.add-to-cart" ); });

# ]







# ----------------------------------------------------------- [ ADD-PURE-CART

Flight::route( "/add-pure-cart" , function(){



	$safePost = filter_input_array( INPUT_POST );



	$product = $safePost['product'];

	$quantity = (int)$safePost['package'];



	switch( $quantity )

		{

			case 1:

				$price = 59.99;

				$regularly = 93.99;

				break;

			case 2:

				$price = 102.99;

				$regularly = 187.98;

				break;

			case 3:

				$price = 139.99;

				$regularly = 281.97;

				break;

			case 4:

				$price = 179.99;

				$regularly = 375.96;

				break;

			case 5:

				$price = 209.99;

				$regularly = 469.95;

				break;

		}



	$x = 0;

	$newproduct = true;



	if( is_array( $_SESSION['cart'] ) )

		{

			foreach( $_SESSION['cart'] as $item )

				{

					if( $item['product'] == $product )

						{

							$_SESSION['cart'][$x]['quantity'] = $quantity;

							$_SESSION['cart'][$x]['free'] = 0;

							$_SESSION['cart'][$x]['price'] = number_format( $price, 2 );

							$_SESSION['cart'][$x]['regularly'] = $regularly;

							$_SESSION['cart'][$x]['displayname'] = $safePost['displayname'];

							$newproduct = false;

							break;

						}

					$x += 1;

				}

		}



	if( $newproduct )

		{

			$truearray = 

				[

					"product" => $product,

					"quantity" => $quantity,

					"free" => 0,

					"price" => number_format( $price, 2 ),

					"regularly" => $regularly,

					"displayname" => $safePost['displayname']

				];

			$_SESSION['cart'][] = $truearray;

		}





//scuttle( $_SESSION );



	sm( "{$safePost['displayname']} x{$quantity} added to your cart!" );



	forward( "cart" );



die( "err.add-to-cart" ); });

# ]







# ----------------------------------------------------------- [ ADD-MITE-CART

Flight::route( "/add-mite-cart" , function(){



	$safePost = filter_input_array( INPUT_POST );



	$product = $safePost['product'];

	$quantity = (int)$safePost['package'];

	$free = 0;



	switch( $quantity )

		{

			case 2:

				$free = 1;

				$price = 39.95;

				break;

			case 3:

				$free = 2;

				$price = 59.95;

				break;

			case 5:

				$free = 5;

				$price = 99.95;

				break;

		}



	$x = 0;

	$newproduct = true;





	if( is_array( $_SESSION['cart'] ) )

		{

			foreach( $_SESSION['cart'] as $item )

				{

					if( $item['product'] == $product )

						{

							$_SESSION['cart'][$x]['quantity'] = $quantity;

							$_SESSION['cart'][$x]['free'] = $free;

							$_SESSION['cart'][$x]['price'] = $price;

							$_SESSION['cart'][$x]['regularly'] = $safePost['regularly'];

							$_SESSION['cart'][$x]['displayname'] = $safePost['displayname'];

							$newproduct = false;

							break;

						}

					$x += 1;

				}

		}



	if( $newproduct )

		{

			$truearray = 

				[

					"product" => $product,

					"quantity" => $quantity,

					"free" => $free,

					"price" => $price,

					"regularly" => $safePost['regularly'],

					"displayname" => $safePost['displayname']

				];

			$_SESSION['cart'][] = $truearray;

		}





//scuttle( $_SESSION );



	sm( "{$safePost['displayname']} x{$quantity}(+{$free}) added to your cart!" );



	forward( "cart" );



die( "err.add-mite-cart" ); });

# ]







# ----------------------------------------------------------- [ CHECKOUT

Flight::route( "/checkout" , function(){



	count_cart();



if( empty( $_SESSION['cart'] ) || !is_array( $_SESSION['cart'] ) )

	{

		forward();

		//scuttle( "no cart" );

	}



if( $_GET['test'] == "YES" )

	{ $_SESSION['testing'] = true; }

else

	{ $_SESSION['testing'] = false; }



	foreach( $_SESSION['cart'] as $product )

		{

			$total += $product['price'];

		}



	$total = number_format( $total, 2 );





	Flight::render( "checkout",

			[

				"count" => $count,

				"total" => $total

			]

		);

	exit();



die( "err.checkout" ); });

# ]







# ----------------------------------------------------------- [ PROCESS

Flight::route( "/process" , function(){



	$safePost = filter_input_array( INPUT_POST );



	check_token( $safePost );



	if( $safePost['paytype'] != "paypal" )

		{

			### CHECK IF CREDIT CARD IS EXPIRED

				$this_month		=		intval( date( "m" ) );

				$this_year		=		intval( date( "y" ) );

				$that_month		=		intval( $safePost['ccMonth'] );

				$that_year		=		intval( $safePost['ccYear'] );

				if( ( $that_month < $this_month && $this_year == $that_year ) || $this_year > $that_year )

					{

						em( "Your credit card expiration date has passed. Please re-confirm the expiration date on your credit card." );

						forward( "checkout" );

					}



			### DETERMINE CREDIT CARD TYPE VIA FIRST DIGIT

				$credit_card_type = get_cc_type( $safePost["ccNumber"] );

		}



	### STORE ORDER DATA IN SESSION

				$_SESSION["firstName"]								= 	$safePost["firstName"];

				$_SESSION["lastName"]									= 	$safePost["lastName"];

				$_SESSION["phone"]										= 	$safePost["phone"];

				$_SESSION["email"]										= 	$safePost["email"];

				$_SESSION["shippingAddress1"]					= 	$safePost["shippingAddress1"];

				$_SESSION["shippingAddress2"]					= 	$safePost["shippingAddress2"];

				$_SESSION["shippingCity"]							= 	$safePost["shippingCity"];

				$_SESSION["shippingZip"]							= 	$safePost["shippingZip"];

				$_SESSION["shippingProvince"]					= 	$safePost["shippingProvince"];

				$_SESSION["shippingCountry"]					= 	$safePost["shippingCountry"];

				if( $safePost['shippingCountry'] == "US" )

					{

						$_SESSION["shippingState"]						= 	$safePost["shippingState"];

					}

				else

					{

						$_SESSION["shippingState"]						= 	$safePost["shippingStateCA"];

					}

				if( $safePost['paytype'] != "paypal" )

					{

						$_SESSION["paytype"]							=		"creditcard";

						$_SESSION["creditCardType"]				= 	$credit_card_type;

						$_SESSION["creditCardNumber"]			= 	$safePost["ccNumber"];

						$_SESSION["ccMonth"]							= 	$safePost["ccMonth"];

						$_SESSION["ccYear"]								= 	$safePost["ccYear"];

						$_SESSION["CVV"]									= 	$safePost["CVV"];

						$_SESSION["expirationDate"]				= 	$safePost["ccMonth"] . $safePost["ccYear"];

					}

				else

					{

						$_SESSION["paytype"]							=		"paypal";

					}



		if( $safePost["shippingDifferent"] == "1" )

			{

				$_SESSION["billingSameAsShipping"]		= 	"NO";

				$_SESSION["billingAddress1"]					= 	$safePost["billingAddress1"];

				$_SESSION["billingAddress2"]					= 	$safePost["billingAddress2"];

				$_SESSION["billingCity"]							= 	$safePost["billingCity"];

				$_SESSION["billingProvince"]					= 	$safePost["billingProvince"];

				$_SESSION["billingZip"]								= 	$safePost["billingZip"];

				$_SESSION["billingCountry"]						= 	$safePost["billingCountry"];

				if( $safePost['billingCountry'] == "US" )

					{

						$_SESSION["billingState"]						= 	$safePost["billingState"];

					}

				else

					{

						$_SESSION["billingState"]						= 	$safePost["billingStateCA"];

					}

			}

		else

			{

				$_SESSION["billingSameAsShipping"]		= 	"YES";

				$_SESSION["billingAddress1"]					= 	$safePost["shippingAddress1"];

				$_SESSION["billingAddress2"]					= 	$safePost["shippingAddress2"];

				$_SESSION["billingCity"]							= 	$safePost["shippingCity"];

				$_SESSION["billingProvince"]					= 	$safePost["shippingProvince"];

				$_SESSION["billingZip"]								= 	$safePost["shippingZip"];

				$_SESSION["billingCountry"]						= 	$safePost["shippingCountry"];

				if( $safePost['billingCountry'] == "US" )

					{

						$_SESSION["billingState"]						= 	$safePost["shippingState"];

					}

				else

					{

						$_SESSION["billingState"]						= 	$safePost["shippingStateCA"];

					}

			}



if( !empty( $_POST['couponcode'] ) )

	{

		$uppercoupon = strtoupper( $_POST['couponcode'] );

		if( array_key_exists( $uppercoupon, COUPONS ) )

			{

				$_SESSION['promoCode'] = $uppercoupon;

			}

		else

			{

				unset( $_SESSION['discountTotal'] );

			}

	}



$products = [];

$fullproduct = "";



foreach( $_SESSION['cart'] as $product )

	{

		$fullproduct = $product['product'].$product['quantity'];

		switch( $fullproduct )

			{

				case "charcoal-bag5":

					$products[] = 2674;

					break;

				case "charcoal-bag3":

					$products[] = 2673;

					break;

				case "charcoal-bag2":

					$products[] = 2672;

					break;

				case "pure1":

					$products[] = 2678;

					$_SESSION['has-ship'] = "yes";

					break;

				case "pure2":

					$products[] = 2679;

					$_SESSION['has-ship'] = "yes";

					break;

				case "pure3":

					$products[] = 2680;

					$_SESSION['has-ship'] = "yes";

					break;

				case "pure4":

					$products[] = 2681;

					$_SESSION['has-ship'] = "yes";

					break;

				case "pure5":

					$products[] = 2682;

					$_SESSION['has-ship'] = "yes";

					break;

				case "mite-fighter5":

					$products[] = 2677;

					break;

				case "mite-fighter3":

					$products[] = 2676;

					break;

				case "mite-fighter2":

					$products[] = 2675;

					break;

				case "charcoal-inserts5":

					$products[] = 2685;

					break;

				case "charcoal-inserts3":

					$products[] = 2684;

					break;

				case "charcoal-inserts2":

					$products[] = 2683;

					break;

			}

	}



$products_csv = "";

$mainProduct = array_shift( $products );

if( !empty( $products ) && is_array( $products ) )

	{ $products_csv = generateCSV( $products ); }



### CHECK FOR A PRODUCT ERROR

	if( empty( $mainProduct ) && empty( $products ) )

		{

			em( "Product not found! Please try again or contact support@breathegreenstore.com" );

			forward( "checkout" );

		}



### EXECUTE THE ORDER

	$order_data = stored_in_session( $mainProduct, $products_csv );

	if( $_SESSION['paytype'] == "paypal" )

		{

			$url = LLCRMURL . '?' . http_build_query( $order_data );

			header( "Location: " . $url );

			exit();

		}

	$response = curl_to_limelight( $order_data );





### CHECK FOR AN ORDER ERROR

	if( $response["errorFound"] != "0" )

		{

			//scuttle($response);

			em( $response["errorMessage"] );forward( "checkout" );

		}



### STORE VALUES FOR RECEIPT PAGE(S)

	$_SESSION['expired'] = "false";

	$_SESSION["customerId"]						= $response["customerId"];

	$_SESSION["mainOrderId"]					= $response["orderId"];

	$_SESSION["orderTotal"]						= $response["orderTotal"];

	$_SESSION["gatewayDescriptor"]		= $response["gatewayDescriptor"];

	$_SESSION["gatewayId"]						= $response["gatewayId"];



### PROCEED TO RECEIPT

	forward( "receipt" );



die( "err.process" ); });

# ]







# ----------------------------------------------------------- [ PAYPAL RETURN

Flight::route( "/paypalpaid" , function(){





### CHECK FOR AN ORDER ERROR

	if( $_GET["errorFound"] != "0" )

		{

			if( $_GET["errorMessage"] == "payer_id - Value must not be blank." )

				{ $_SESSION["errorMessage"] = "The PayPal transaction was declined."; }

			else

				{ $_SESSION["errorMessage"] = $_GET["errorMessage"]; }

			forward( "checkout" );

		}



$_SESSION['expired'] = "false";

$_SESSION['mainOrderId'] = $_GET['orderId'];

$_SESSION['orderTotal'] = $_GET['orderTotal'];

$_SESSION["gatewayDescriptor"] = $_GET["gatewayDescriptor"];



/*



*/



### PROCEED TO RECEIPT

	forward( "receipt" );



die( "err.paypalpaid" ); });

# ]







# ----------------------------------------------------------- [ RECEIPT

Flight::route( "/receipt" , function(){



/*

Array

(

    [errorFound] => 0

    [responseCode] => 100

    [transactionID] => Not Available

    [customerId] => 2438097

    [authId] => Not Available

    [orderId] => 9085107

    [orderTotal] => 99.95

    [orderSalesTaxPercent] => 0.00

    [orderSalesTaxAmount] => 0.00

    [test] => 1

    [gatewayId] => 1642

    [prepaid_match] => 0

    [gatewayCustomerService] => 1-866-780-1862

    [gatewayDescriptor] => 8667801862LIFEDIRECTION

    [subscription_id] => Array

        (

            [1993] => 62d5512e8b77d04124a9395d7904d91a

        )



    [resp_msg] => Approved

)

*/



	Flight::render( "receipt",

			[

				//"count" => $count,

				//"total" => $total

			]

		);

	exit();



die( "err.receipt" ); });

# ]













# ----------------------------------------------------------- [ 404

Flight::map( "notFound" , function(){



	forward();

	exit();



die( "err.notFound" ); });

# ]







# ----------------------------------------------------------- [ FLIGHT START

Flight::set( "folder" , $folder );

Flight::start();

# ]







# ----------------------------------------------------------- [ COMMON FUNCTIONS





function generateCSV( $data )

	{

		foreach( $data as $prod )

			{ $newcsv .= "{$prod},"; }

		return rtrim( $newcsv, "," );

	}







	function count_cart()

		{

			$quantity = 0;

			if( !empty( $_SESSION['cart'] ) )

				{

					foreach( $_SESSION['cart'] as $product )

						{

							//$quantity += $product['quantity'];

							$quantity += 1;

						}

				}

			$_SESSION['quantity'] = $quantity;

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



	function stored_in_session( $mainProduct, $products = "" )

		{

			if( $_SESSION['has-ship'] == "yes" )

				{ $shipID = 234; }

			else

				{ $shipID = 208; }

			$order_data =

				[

					"username"

						=>	USERNAME,

					"password"

						=>	PASSWORD,

					"campaignId"

						=>	2966,

					"shippingId"

						=>	$shipID,

					"method"

						=>	"NewOrder",

					"tranType"

						=>	"Sale",

					"productId"

						=> $mainProduct,

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



			if( $_SESSION["paytype"] == "creditcard" )

				{

					$order_data["creditCardType"] = $_SESSION["creditCardType"];

					$order_data["creditCardNumber"] = $_SESSION["creditCardNumber"];

					$order_data["expirationDate"] = $_SESSION["expirationDate"];

					$order_data["CVV"] = $_SESSION["CVV"];

				}

			else

				{

					$order_data["campaignId"] = 2968; //testing: 1859 //prod: 2968

					if( $_SESSION['testing'] )

						{ $order_data["campaignId"] = 1859; }

					$order_data["creditCardType"] = "paypal";

					$order_data["alt_pay_return_url"] = 

						"https://www.breathegreenstore.com/paypalpaid";

				}

			if( $_SESSION["billingCountry"] == "CA" )

				{

					$order_data["campaignId"] = 2967;

				}



			if( !empty( $products ) )

				{

					$order_data['upsellCount'] = count( str_getcsv( $products ) );

					$order_data['upsellProductIds'] = $products;

				}

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

			if( !empty( $_SESSION['promoCode'] ) )

				{

					$order_data['promoCode'] = $_SESSION['promoCode'];

				}

			return $order_data;

		}







	# FORWARD TO ANOTHER ROUTE

	# ------------------------------------------

		function forward( $pathForward = "" )

			{

				$qs = $_SERVER['QUERY_STRING'];

				header( "Location: " . $GLOBALS['folder'] . $pathForward . "?" . $qs );

				exit();

			}



	# CHECK FORM TOKEN

	# ------------------------------------------

		function check_token( $safePost )

			{

				if( !empty( $safePost['token'] ) )

					{

						if (hash_equals($_SESSION['token'], $safePost['token']))

							{

								return true;

							}

						else

							{ em( "Authentication failed. Please try again." );forward( "checkout" ); }

					}

				else

					{ forward( "logout" ); }

			}



	# USED IN TESTING TO OUTPUT TO SCREEN

	# ------------------------------------------

		function scuttle( $output , $break = true )

			{

				echo "<pre>";

				print_r( $output );

				echo "</pre>";

				if( $break ){ exit(); }

			}



	# CHECK SUBMITTED GOOGLE RECAPTCHA

	# ------------------------------------------

		function captchacheck( $input )

			{

				$goods = [

						"secret" => "6LdiW1IUAAAAAKqJlyP0-FWzdeuyfq-rVgz-HYO_",

						"response" => $input

					];

				$prove = curl_init();

				curl_setopt( $prove , CURLOPT_URL , "https://www.google.com/recaptcha/api/siteverify" );

				curl_setopt( $prove , CURLOPT_POST , true );

				curl_setopt( $prove , CURLOPT_POSTFIELDS , http_build_query( $goods ) );

				curl_setopt( $prove , CURLOPT_SSL_VERIFYPEER , false );

				curl_setopt( $prove , CURLOPT_RETURNTRANSFER , true );

				$reply = json_decode(curl_exec( $prove ) , true );

				if( $reply["success"] != true )

					{ return false; }

				else

					{ return true; }

			}



	# RENDER MESSAGES

	# ------------------------------------------

		function alerts()

			{

				render_success();

				render_notice();

				render_error();

			}



	# RENDER SESSION ERROR MESSAGE

	# ------------------------------------------

		function render_error()

			{

				if( $_SESSION["errormessage"] )

					{

						foreach( $_SESSION["errormessage"] as $error )

							{

								echo "<p class='alert alert-danger py-1'>";

								echo "<i class='fa fa-exclamation-circle'></i> {$error}";

								echo "</p>";

							}

						unset( $_SESSION["errormessage"] );

					}

			}



	# RENDER SESSION NOTICE MESSAGE

	# ------------------------------------------

		function render_notice()

			{

				if( $_SESSION["noticemessage"] )

					{

						foreach( $_SESSION["noticemessage"] as $notice )

							{

								echo "<p class='alert alert-info py-1'>";

								echo "<i class='fa fa-info-circle'></i> {$notice}";

								echo "</p>";

							}

						unset( $_SESSION["noticemessage"] );

					}

			}



	# RENDER SESSION SUCCESS MESSAGE

	# ------------------------------------------

		function render_success()

			{

				if( $_SESSION["successmessage"] )

					{

						foreach( $_SESSION["successmessage"] as $success )

							{

								echo "<p class='alert alert-success py-1'>";

								echo "<i class='fa fa-check'></i> {$success}";

								echo "</p>";

							}

						unset( $_SESSION["successmessage"] );

					}

			}



	# SET SESSION ERROR MESSAGE

	# ------------------------------------------

		function em( $input )

			{ $_SESSION["errormessage"][] = $input; }



	# SET SESSION NOTICE MESSAGE

	# ------------------------------------------

		function nm( $input )

			{ $_SESSION["noticemessage"][] = $input; }



	# SET SESSION SUCCESS MESSAGE

	# ------------------------------------------

		function sm( $input )

			{ $_SESSION["successmessage"][] = $input; }

