<?php
require_once( "CartsGuru.php" );
class cg extends CartsGuru
	{
		function __construct()
			{
				$params = array(
					'site_id' => '4d4aa405-3d73-4e9c-8bd3-805ca1c96785',
					'auth_key' => 'd87ed92584e84856ac8596ee6e1477a5'
				);
				parent::__construct( $params );
			}
		public function adaptCart( $item )
			{
				return $item;
			}
		public function adaptOrder( $item )
			{
				return $item;
			}
		public function adaptProduct( $item )
			{
				return $item;
			}
	}

/*

Send cart
$cg = new CartsGuruController();
$cg->trackCart($cart);

Send orders
$cg = new CartsGuruController();
$cg->trackOrder($order);



Add online retargeting feature 
You should insert the tag on each page that the visitor can access
$cg = new CartsGuruController();
$context = array(
    'cart' => $cart,        // Everywhere when cart exists
    'order' => $order,      // Only on the order page confirmation
    'product' => $product,  // On product page
);
​
$cg->generateTag($context);


{
	siteId: ""		// SiteId is part of configuration
	id: "", 			// Cart reference (use SessionId if you don’t have specific ID)
	totalATI: 0, 		// Total price including taxes
	totalET: 0, 		// Total price excluding taxes
	currency: "", 	// (optional)  Currency, ISO code 						
	accountId: "", 	// Account id of the buyer (we advise to use the email address)
	visitorId: "", 	// Required when using the SDK to send anonymous cart
	ip: "",	        // (optional)  Visitor IP address 						
	recoverUrl: "",	// (optional)  Link to recover the cart (link to cart with security token included)	
	civility: "",		// (optional)  Use string in this list : 'mister','madam','miss' 			
	lastname: "", 	// (optional)  Lastname 							
	firstname: "", 	// (optional)  Firstname 							
	email: "", 		// Email address				 			
	homePhoneNumber: "", 	  // (optional)  Landline phone number 						
	mobilePhoneNumber: "", //  (optional)  Mobile phone number						
	phoneNumber: "", 	// Phone number of buyer, if you don’t know the kind of it 		(optional)
	countryCode: "", 	// Country ISO code of the buyer, 2 or 3 letters
	custom: {}, 		//  (optional) Any custom fields you want to send with the cart. Standard fields are language (ISO code), customerGroup and isNewCustomer                                     	               
	​buyerAcceptsMarketing: true, //(optional) True or false, depending if the customer wants to receive marketing

	//Details of each items
	items: [
	id: "",	 		// SKU or product id
	label: "",	 	// Designation 
	quantity: 1, 	// Count 
	totalATI: 0, 	// Total price included taxes
	totalET: 0, 	// Total price excluded taxes
	url: "", 		// URL of product sheet
	imageUrl: "", 	// Image URL of product, size should be min 150*150, max 180*180
	universe: "",   // (optional)  Main category of the product 					
	category:  "" 	// (optional)  Sub category of the product 					
	]
}

*/
