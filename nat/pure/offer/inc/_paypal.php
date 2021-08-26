<?php
### _paypal.php
require_once( "_setup.php" );
set_time_limit( 0 );

//scuttle( $safePost );
/*
    [product_id] => 1992
    [product_price] => 59.95
    [product_rate] => 1
    [innerButton1_click] => 0
    [innerButton2_click] => 0
    [product] => 1992
    [firstName] => John
    [lastName] => Taco
    [email] => test@example.com
    [phone] => 8175554242
    [shippingCountry] => US
    [shippingAddress1] => 123 Main
    [shippingAddress2] => 
    [shippingCity] => Phoenix
    [shippingState] => AZ
    [shippingProvince] => AB
    [shippingZip] => 85028
    [billingSameAsShipping] => yes
    [billShipSame] => on
    [billingCountry] => US
    [billingAddress1] => 
    [billingAddress2] => 
    [billingCity] => 
    [billingState] => AL
    [billingProvince] => AB
    [billingZip] => 
    [paytype] => paypal
    [creditCardNumber] => 
    [CVV] => 
    [ccMonth] => 
    [ccYear] => 
    [extraproduct] => on
*/

if( empty( $safePost ) )
	{
		forward( "checkout-now" );
	}

$_SESSION['firstName'] = $safePost['firstName'];
$_SESSION['lastName'] = $safePost['lastName'];
$_SESSION['email'] = $safePost['email'];
$_SESSION['phone'] = $safePost['phone'];
$_SESSION['shippingAddress1'] = $safePost['shippingAddress1'];
$_SESSION['shippingAddress2'] = $safePost['shippingAddress2'];
$_SESSION['shippingCity'] = $safePost['shippingCity'];
$_SESSION['shippingCountry'] = $safePost['shippingCountry'];
$_SESSION['shippingZip'] = $safePost['shippingZip'];
if( $safePost['shippingCountry'] == "US" )
	{ $_SESSION['shippingState'] = $safePost['shippingState']; }
else
	{ $_SESSION['shippingState'] = $safePost['shippingProvince']; }

### FIND THE ORDERED PRODUCT
	foreach( $products as $product )
		{
			if( $product["id"] == $safePost["product_id"] )
				{
					$_SESSION["mainProduct"] = $product["id"];
					$_SESSION["mainShipping"] = $product["ship_id"];
					switch( $safePost["product_rate"] )
						{
							case 2:
									$_SESSION["mainPrice"] = $product["10off"];
								break;
							case 3:
									$_SESSION["mainPrice"] = $product["15off"];
								break;
							default:
									$_SESSION["mainPrice"] = $product["price"];
						}
				}
		}

$order_data =
	[
		"username"           =>		USERNAME,
		"password"           =>		PASSWORD,
		"method"             =>		"NewOrder",
		"tranType"           =>		"sale",
		"creditCardType"     =>		"paypal",
		"alt_pay_return_url" =>		DOMAIN . FOLDER . "inc/_return.php",
		"firstName"					 =>		$_SESSION['firstName'],
		"lastName"					 =>		$_SESSION['lastName'],
		"email"							 =>		$_SESSION['email'],
		"phone"							 =>		$_SESSION['phone'],
		"shippingAddress1"	 =>		$_SESSION['shippingAddress1'],
		"shippingAddress2"	 =>		$_SESSION['shippingAddress2'],
		"shippingCity"			 =>		$_SESSION['shippingCity'],
		"shippingState"			 =>		$_SESSION['shippingState'],
		"shippingZip"				 =>		$_SESSION['shippingZip'],
		"shippingCountry"		 =>		$_SESSION['shippingCountry'],
		"ipAddress"          =>		$_SESSION["ipAddress"],
		"shippingId"         =>		$_SESSION["mainShipping"],
		"campaignId"         =>		PAYPAL_CAMPAIGN,
		"productId"          =>		$_SESSION["mainProduct"],
		"dynamic_product_price_".$_SESSION["mainProduct"]	 =>		$_SESSION["mainPrice"],
		"AFFID" => $_SESSION["AFFID"],
		"SID" => $_SESSION["SID"],
		"C1" => $_SESSION["C1"],
		"C2" => $_SESSION["C2"],
		"C3" => $_SESSION["C3"],
		"click_id" => $_SESSION["click_id"],
		"utm_source" => $_SESSION["utm_source"],
		"utm_medium" => $_SESSION["utm_medium"],
		"utm_campaign" => $_SESSION["utm_campaign"],
		"transaction_id" => $_SESSION["transaction_id"]
	];


if( $safePost["extraproduct"] == "on" )
	{
    $order_data["upsellCount"] = '1';
    $order_data["upsellProductIds"] = $addon["id"];
$order_data["dynamic_product_price_".$addon["id"]] = $addon["price"];
		$_SESSION["extraproduct"] = $addon["id"];
	}

$url = LLCRMURL . '?' . http_build_query( $order_data );

### FORWARD FOR LIMELIGHT PROCESSING
	header( "Location: " . $url );
	exit();
