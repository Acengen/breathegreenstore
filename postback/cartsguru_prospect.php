<?php

		# Store post
    $putstring = "";
		$store_post = fopen( "posts.csv", "a" );
    foreach( $_GET as $key => $val )
      {
        $putstring .= $val.",";
      }
		fputcsv( $store_post, [ $putstring ] );
		fclose( $store_post );

// "campaign_id,email,first_name,ip_address,last_name,phone,prospect_id,country,"

if( !empty( $_GET["prospect_id"] ) && !empty( $_GET["email"] ) )
	{

		if( empty( $_GET["country"] ) ){ $_GET["country"] = "US"; }

		$_GET['phone'] = (int)$_GET['phone'];
		if( strlen( $_GET['phone'] ) == 10 ){ $_GET['phone'] = "+1" . $_GET['phone']; }

		require_once( "inc/control.php" );
		$cg = new cg();
		$cart =
			[
				"siteId"							=>	"4d4aa405-3d73-4e9c-8bd3-805ca1c96785" ,
				"id"									=>	$_GET["prospect_id"] ,
				"totalATI"						=>	2.22 ,
				"totalET"							=>	2.22 ,
				"accountId"						=>	$_GET["email"] ,
				"ip"									=>	$_GET["ip_address"] ,
				"lastname"						=>	$_GET["last_name"] ,
				"firstname"						=>	$_GET["first_name"] ,
				"email"								=>	$_GET["email"] ,
				"mobilePhoneNumber"		=>	$_GET["phone"] ,
				"countryCode"					=>	$_GET["country"] ,
				"buyerAcceptsMarketing"	=> "true",
				"items" => 
					[
						0 =>
							[
								"id"					=> 222 ,
								"label"				=> "AirGenie - Generic" ,
								"quantity"		=> 1 ,
								"totalATI"		=> 2.22 ,
								"totalET"			=> 2.22 ,
								"universe"		=> $_GET["campaign_id"] ,
								"url"					=> "https://www.breathegreenstore.com/postback/cartsguru_prospect.php" ,
								"imageUrl"		=> "https://www.breathegreenstore.com/product.png"
							]
					]
			];
		$recart = 
			stripslashes( json_encode( $cart  , JSON_FORCE_OBJECT , JSON_UNESCAPED_SLASHES ) );
		$response = $cg->trackCart( $recart );

		$thisdate = $response->headers->date;
		$status = $response->response;
		$lineitem = [ $thisdate, $status, $_GET["email"] ];
		$responses_carts = fopen( "responses_carts.csv", "a" );
		fputcsv( $responses_carts, $lineitem );
		fclose( $responses_carts );

		# Store email and prospect_id for retrieval at order
		$store_prospect = fopen( "prospects.csv", "a" );
		fputcsv( $store_prospect, [ $_GET['email'], $_GET['prospect_id'] ] );
		fclose( $store_prospect );

//mail('don@donelliston.com', 'Pure CG Prospect', $recart );

	}
else
	{ 
	//mail('don@donelliston.com', 'Pure CG Order', json_encode( $_GET, JSON_FORCE_OBJECT, JSON_UNESCAPED_SLASHES ) );
  echo "No prospect";
	}

		//$resarray = json_decode( json_encode( $response ), true);
		$resarray = (array)$response;


echo "<pre>";
//print_r( $cart );
print_r( $response );


/*

https://www.breathegreenstore.com/postback/cartsguru_prospect.php?campaign_id=3011&email=don@donelliston.com&first_name=Don&ip_address=178.0.22.22&last_name=Elliston&phone=8175554242&prospect_id=88088088&country=US

https://breathegreenstore.com/postback/cartsguru_prospect.php?campaign_id=2222&email=test1404@example.com&first_name=Charlie&ip_address=178.0.22.22&last_name=Murphy&phone=8175558240&prospect_id=330222

https://breathegreenstore.com/postback/cartsguru_prospect.php?campaign_id={campaign_id}&email={email}&first_name={first_name}&ip_address={ip_address}&last_name={last_name}&opt={opt}&phone={phone}&prospect_id={prospect_id}

*/