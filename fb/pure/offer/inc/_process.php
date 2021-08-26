<?php
### _process.php
require_once( "_setup.php" );

### CHECK IF CREDIT CARD IS EXPIRED
	$this_month		=		intval( date( "m" ) );
	$this_year		=		intval( date( "y" ) );
	$that_month		=		intval( $safePost["ccMonth"] );
	$that_year		=		intval( $safePost["ccYear"] );
	if( ( $that_month < $this_month && $this_year == $that_year ) || $this_year > $that_year )
		{
			$_SESSION["errorMessage"] =
				"Your credit card expiration date has passed. " .
				"Please re-confirm the expiration date on your credit card.";
			forward( "checkout-now" );
		}

### DETERMINE CREDIT CARD TYPE VIA FIRST DIGIT
	$credit_card_type = get_cc_type( $safePost["ccnumber"] );

### STORE ORDER DATA IN SESSION
	$_SESSION["firstName"]					= $safePost["firstName"];
	$_SESSION["lastName"]						= $safePost["lastName"];
	$_SESSION["phone"]							= $safePost["phone"];
	$_SESSION["email"]							= $safePost["email"];
	$_SESSION["shippingAddress1"]		= $safePost["shippingAddress1"];
	$_SESSION["shippingAddress2"]		= $safePost["shippingAddress2"];
	$_SESSION["shippingCity"]				= $safePost["shippingCity"];
	$_SESSION["shippingZip"]				= $safePost["shippingZip"];
	$_SESSION["shippingState"]			= $safePost["shippingState"];
	$_SESSION["shippingProvince"]		= $safePost["shippingProvince"];
	$_SESSION["shippingCountry"]		= $safePost["shippingCountry"];
	$_SESSION["creditCardType"]			= $credit_card_type;
	$_SESSION["creditCardNumber"]		= $safePost["creditCardNumber"];
	$_SESSION["ccMonth"]						= $safePost["ccMonth"];
	$_SESSION["ccYear"]							= $safePost["ccYear"];
	$_SESSION["CVV"]								= $safePost["CVV"];
	$_SESSION["expirationDate"]			= $safePost["ccMonth"] . $safePost["ccYear"];

	if ( $safePost["billingSameAsShipping"] == "yes" )
		{
			$_SESSION["billingSameAsShipping"]		= "YES";
			$_SESSION["billingAddress1"]					= $safePost["shippingAddress1"];
			$_SESSION["billingAddress2"]					= $safePost["shippingAddress2"];
			$_SESSION["billingCity"]							= $safePost["shippingCity"];
			$_SESSION["billingState"]							= $safePost["shippingState"];
			$_SESSION["billingProvince"]					= $safePost["shippingProvince"];
			$_SESSION["billingZip"]								= $safePost["shippingZip"];
			$_SESSION["billingCountry"]						= $safePost["shippingCountry"];
		}
	else
		{
			$_SESSION["billingSameAsShipping"]		= "NO";
			$_SESSION["billingAddress1"]					= $safePost["billingAddress1"];
			$_SESSION["billingAddress2"]					= $safePost["billingAddress2"];
			$_SESSION["billingCity"]							= $safePost["billingCity"];
			$_SESSION["billingState"]							= $safePost["billingState"];
			$_SESSION["billingProvince"]					= $safePost["billingProvince"];
			$_SESSION["billingZip"]								= $safePost["billingZip"];
			$_SESSION["billingCountry"]						= $safePost["billingCountry"];
		}


### DETERMINE THE ORDERED PRODUCT
	foreach( $products as $product ){
		if( $product["id"] == $safePost["product_id"] )
			{
				$_SESSION["mainProduct"] = $product["id"];
				$_SESSION["mainName"] = $product["name"];
				$_SESSION["shippingId"] = $product["ship_id"];
				$_SESSION["shipPrice"] = $product["ship_price"];
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

### CHECK FOR A PRODUCT ERROR
	if( empty( $_SESSION["mainProduct"] ) )
		{
			$_SESSION["errorMessage"] =
			"Product not found! " .
			"Please try again or contact " . SUPPORT_EMAIL;
			forward( "checkout-now" );
		}

### EXECUTE THE MAIN PRODUCT ORDER
	$order_data = stored_in_session( $_SESSION["mainProduct"] , $_SESSION["mainPrice"] );
	### INCLUDE THE EXTRA PRODUCT (IF SELECTED)
		if( $safePost["extraproduct"] == "on" )
			{
				$order_data["upsellProductIds"] = $addon["id"];
				$order_data["upsellCount"] = 1;
				$_SESSION["extraproduct"] = $addon["id"];
			}
	$response = curl_to_limelight( $order_data );

### CHECK FOR AN ORDER ERROR
	if( $response["errorFound"] != "0" )
		{
scuttle($response);
			$_SESSION["errorMessage"] = $response["errorMessage"];
			forward( "checkout-now" );
		}

### STORE VALUES FOR RECEIPT PAGE(S)
	$_SESSION["usingPayPal"]					= "NO";
	$_SESSION["customerId"]						= $response["customerId"];
	$_SESSION["mainOrderId"]					= $response["orderId"];
	$_SESSION["orderTotal"]						= $response["orderTotal"];
	$_SESSION["gatewayDescriptor"]		= $response["gatewayDescriptor"];
	$_SESSION["gatewayId"]						= $response["gatewayId"];

### PROCEED TO UPSELL1
	forward( "upsell1" );
