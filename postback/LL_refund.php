<?php
if( !empty( $_GET[ "order_id" ] ) )
	{
		require_once( "inc/control.php" );
		$cg = new cg();
		$cart =
			[
				"siteId"							=>	"4d4aa405-3d73-4e9c-8bd3-805ca1c96785" ,
				"id"									=>	$_GET[ "order_id" ] ,
				"cartId"							=>	$_GET[ "order_id" ] ,
				"totalATI"						=>	$_GET[ "order_total" ] ,
				"totalET"							=>	$_GET[ "order_total" ] ,
				"accountId"						=>	$_GET[ "customer_email" ] ,
				"ip"									=>	$_GET[ "ip_address" ] ,
				"lastname"						=>	$_GET[ "shipping_last_name" ] ,
				"firstname"						=>	$_GET[ "shipping_first_name" ] ,
				"email"								=>	$_GET[ "customer_email" ] ,
				"mobilePhoneNumber"		=>	$_GET[ "customer_phone" ] ,
				"countryCode"					=>	"US" ,
				//"state"								=>	"refunded" ,
				"items"								=>	
					[
						0 =>
							[
								"id"					=>	$_GET[ "product_id_csv" ] ,
								"label"				=>	$_GET[ "order_id" ] ,
								"quantity"		=>	1 ,
								"totalATI"		=>	$_GET[ "order_total" ] ,
								"totalET"			=>	$_GET[ "order_total" ] ,
								"url"					=>	"https://breathegreenstore.com/postback/LL_refund.php" ,
								"universe"		=>	$_GET[ "campaign_id" ] ,
								"imageUrl"		=>	
									"https://www.breathegreenstore.com/postback/refund.png"
							]
					]
			];
		$recart =
			stripslashes( json_encode( $cart  , JSON_FORCE_OBJECT , JSON_UNESCAPED_SLASHES ) );		
		$response = $cg->trackOrder( $recart );
		echo "<pre>";
		print_r( $response );
	}
else
	{
		exit( "No order ID" );
	}
