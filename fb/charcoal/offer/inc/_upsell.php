<?php
### _upsell.php
require_once( "_setup.php" );

if( $_SESSION["usingPayPal"] != "YES" )
	{
		$charged = false;
		$thisupsell = $upsells[$safePost["upsell"]];
		foreach( $thisupsell["products"] as $product )
			{
				if( $safePost["productid"] == $product["id"] )
					{
						$order_data = stored_in_session( $product["id"] , $product["price"] );
						$order_data["shippingId"] = $product["ship_id"];
						$response = curl_to_limelight( $order_data );
						### CHECK FOR AN ORDER ERROR
						if( $response["errorFound"] != "0" )
							{
								$_SESSION["errorMessage"] = $response["errorMessage"];
								forward( $upsells[$safePost["upsell"]]["next_page"] );
							}
						$_SESSION["upsells"][] =
							[
								"id" => $product["id"],
								"name" => $product["name"],
								"price" => $product["price"],
								"orderId" => $response["orderId"]
							];
						$charged = true;
					}
			}
		if( !$charged )
			{
				$_SESSION["errorMessage"] = "Sorry, that product was sold out!";
			}
		forward( $upsells[$safePost["upsell"]]["next_page"] );
	}
else
	{
		$upsell = $upsells[$safePost["upsell"]];
		$_SESSION["upholder"] = $safePost["upsell"];
		foreach( $upsell["products"] as $thisone )
			{
				if( $safePost["productid"] == $thisone["id"] )
					{
						$upsell_id = $thisone["id"];
						$upsell_shipping = $thisone["ship_id"];
						$upsell_price = $thisone["price"];
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
				"shippingId"         =>		$upsell_shipping,
				"campaignId"         =>		PAYPAL_CAMPAIGN,
				"productId"          =>		$upsell_id,
				"forceGatewayId"		 => 	$_SESSION["gatewayId"],
				"dynamic_product_price_".$upsell_id	=>		$upsell_price,
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
		$url = LLCRMURL . '?' . http_build_query( $order_data );

		### FORWARD FOR LIMELIGHT PROCESSING
			header( "Location: " . $url );
			exit();
	}
