<?php
$frontend_products = array_map( 'str_getcsv' , file( 'frontend_products.csv' ) );

if( !empty( $_GET["order_id"] ) && !empty( $_GET["customer_email"] ) )
	{
		if( empty( $_GET["shipping_country_iso_3"] ) ){ $_GET["shipping_country_iso_3"] = "USA"; }
		$explosion = explode( "," , $_GET["all_product_id_csv"] );
		$product_id = $explosion[0];
		$explosion = explode( "," , $_GET["all_product_name_csv"] );
		$product_name = $explosion[0];

		### IF THIS IS NOT A FRONT-END PRODUCT, DO NOT SEND ORDER TO CG
			if( !in_array( $product_id , $frontend_products[0] ) )
				{ echo "Not a frontend product."; exit(); }

		### Get prospect_id from csv for cartId via email address
		// Default cartId will be order_id if prospect_id not found in csv
			$prospect_id = $_GET["order_id"];
		$file = fopen('prospects.csv', 'r');
		while (($line = fgetcsv($file)) !== FALSE) {
			if( $_GET['customer_email'] == $line[0] )
				{ $prospect_id = $line[1]; }
		}
		fclose($file);

		$_GET['customer_phone'] = (int)$_GET['customer_phone'];
		if( strlen( $_GET['customer_phone'] ) == 10 ){ $_GET['customer_phone'] = "+1" . $_GET['customer_phone']; }

		require_once( "inc/control.php" );
		$cg = new cg();
		$cart =
			[
				"siteId"							=>	"4d4aa405-3d73-4e9c-8bd3-805ca1c96785" ,
				"id"									=>	$_GET["order_id"] ,
				"cartId"							=>	$prospect_id ,
				"totalATI"						=>	$_GET["order_total"] ,
				"totalET"							=>	$_GET["order_total"] ,
				"accountId"						=>	$_GET["customer_email"] ,
				"ip"									=>	$_GET["ip_address"] ,
				"lastname"						=>	$_GET["shipping_last_name"] ,
				"firstname"						=>	$_GET["shipping_first_name"] ,
				"email"								=>	$_GET["customer_email"] ,
				"mobilePhoneNumber"		=>	$_GET["customer_phone"] ,
				"countryCode"					=>	$_GET["shipping_country_iso_3"] ,
				"buyerAcceptsMarketing"	=> "true",
				"items"								=>	
					[
						0 =>
							[
								"id"					=>	$product_id ,
								"label"				=>	$product_name ,
								"quantity"		=>	1 ,
								"totalATI"		=>	$_GET["order_total"] ,
								"totalET"			=>	$_GET["order_total"] ,
								"url"					=>	"https://www.breathegreenstore.com/postback/cartsguru_order.php" ,
								"universe"		=>	$_GET["campaign_id"] ,
								"imageUrl"		=>	
									"https://www.breathegreenstore.com/postback/product.jpg"
							]
					]
			];

		$recart =
			stripslashes( json_encode( $cart  , JSON_FORCE_OBJECT , JSON_UNESCAPED_SLASHES ) );		
		$response = $cg->trackOrder( $recart );

		$thisdate = $response->headers->date;
		$status = $response->response;
		$lineitem = [ $thisdate, $status, $_GET["customer_email"] ];
		$responses_orders = fopen( "responses_orders.csv", "a" );
		fputcsv( $responses_orders, $lineitem );
		fclose( $responses_orders );

		//$resarray = json_decode( json_encode( $response ), true);
		$resarray = (array)$response;

		//mail('don@donelliston.com', 'Pure CG Order', $recart );

	}
else
	{
		//mail('don@donelliston.com', 'Pure CG Order', json_encode( $_GET, JSON_FORCE_OBJECT, JSON_UNESCAPED_SLASHES ) );
    echo "No order";
	}

echo "<pre>";
//print_r( $cart );
print_r( $response );

/*


https://www.breathegreenstore.com/postback/cartsguru_order.php?customer_email=don@donelliston.com&shipping_first_name=Don&ip_address=178.0.22.22&shipping_last_name=Elliston&order_id=99099099&order_total=4.20&customer_phone=8175554242&all_product_id_csv=2696,2697&all_product_name_csv=Generic1,Generic2&shipping_country_iso_3=US&campaign_id=3011&customer_id=77077077




https://breathegreenstore.com/postback/cartsguru_order.php?customer_email={email}&shipping_first_name={first_name}&ip_address={ip_address}&shipping_last_name={last_name}&order_id={order_id}&order_total={order_total}&customer_phone={phone}&all_product_id_csv={product_id_csv}&all_product_name_csv={product_names_csv}&shipping_country_iso_3={shipping_country}&campaign_id={campaign_id}&customer_id={customer_id}
*/

/*
https://breathegreenstore.com/postback/cartsguru_order.php?customer_email=test1404@example.com&shipping_first_name=Charlie&ip_address=178.0.22.22&shipping_last_name=Murphy&order_id=200200&order_total=2.22&customer_phone=8175558240&all_product_id_csv=2446&all_product_name_csv=Mite+Fighter&shipping_country_iso_3=USA&campaign_id=2573&customer_id=2020
*/