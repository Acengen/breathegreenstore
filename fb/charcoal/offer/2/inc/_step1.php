<?php
### /$folder/inc/_step1.php
require_once( "_setup.php" );

### CREATE PROSPECT RECORD IN LIMELIGHT
	$parameters =
		[
			"username"
				=>	USERNAME,
			"password"
				=>	PASSWORD,
			"campaignId"
				=>	CAMPAIGN,
			"ipAddress"
				=>	$_SESSION["ipAddress"],
			"method"
				=> "NewProspect",
			"firstName"
				=> $safePost["firstName"],
			"lastName"
				=> $safePost["lastName"],
			"email"
				=> $safePost["email"],
			"phone"
				=> $safePost["phone"],
			"notes"
				=>
					DOMAIN . FOLDER
		];
	$prospect = curl_to_limelight( $parameters );
	$_SESSION["prospectId"] = $prospect["prospectId"];

### STORE ORDER DATA IN SESSION
	$_SESSION["firstName"]					= $safePost["firstName"];
	$_SESSION["lastName"]						= $safePost["lastName"];
	$_SESSION["phone"]							= $safePost["phone"];
	$_SESSION["email"]							= $safePost["email"];

### PROCEED TO CHECKOUT
	forward( "checkout-now" );
