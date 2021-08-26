<?php
require_once( "_setup.php" );
/*
    [errorFound] => 1
    [responseCode] => 800
    [transactionID] => PAYID-LQ7343A4W4090398X272340T
    [customerId] => 2312974
    [orderId] => 8832656
    [orderTotal] => 69.92
    [orderSalesTaxPercent] => 0.00
    [orderSalesTaxAmount] => 0.00
    [test] => 0
    [gatewayId] => 1606
    [prepaid_match] => 0
    [gatewayCustomerService] => 5555555555
    [gatewayDescriptor] => PAYPAL *MARGIN LTD
    [subscription_id] => Array
        (
            [1992] => e10fb9e739ebb96b0b8af45c881ec3eb
            [2032] => 36b2c1189449863fa14b69f2c4b19414
        )
    [ACS] => https://www.paypal.com/cgi-bin/webscr?cmd
    [token] => EC-8R227863MA868044B
    [alt_pay_method] => paypal
    [declineReason] => payer_id - Value must not be blank.
    [errorMessage] => payer_id - Value must not be blank.
*/

if( !empty( $_GET["gatewayDescriptor"] ) )
	{
		$_SESSION["chargeNotice"] = $_GET["gatewayDescriptor"];
	}

if( !empty( $_GET["gatewayDescriptor"] ) )
	{
		$_SESSION["chargeNotice"] = $_GET["gatewayDescriptor"];
	}

### CHECK FOR AN ORDER ERROR
	if( $_GET["errorFound"] != "0" )
		{
			if( $_GET["errorMessage"] == "payer_id - Value must not be blank." )
				{
					$_SESSION["errorMessage"] = "The PayPal transaction was declined.";
				}
			else
				{
					$_SESSION["errorMessage"] = $_GET["errorMessage"];
				}
			$errorFound = true;
		}

### RETRIEVE PRODUCT ID
	$arrKeys = array_keys( $_GET["subscription_id"] );
	$thisproduct = $arrKeys[0];

// https://breathegreeneco.com/_close/inc/_return.php?errorFound=1&responseCode=800&transactionID=PAYID-LRAPN3I2SU221740Y143403D&customerId=2313210&orderId=8833106&orderTotal=1.00&orderSalesTaxPercent=0.00&orderSalesTaxAmount=0.00&test=0&gatewayId=1606&prepaid_match=0&gatewayCustomerService=5555555555&gatewayDescriptor=PAYPAL+%2AMARGIN+LTD&subscription_id[1999]=663622d8080cf2344fbc8da8568eb151&ACS=https%3A%2F%2Fwww.paypal.com%2Fcgi-bin%2Fwebscr%3Fcmd&token=EC-6LG25206RU7066413&alt_pay_method=paypal&declineReason=payer_id+-+Value+must+not+be+blank.&errorMessage=payer_id+-+Value+must+not+be+blank.

if( !empty( $_SESSION["upholder"] ) )
	{
		### UPSELL PRODUCT
			$bigwoo = $upsells[$_SESSION["upholder"]]["products"];
			$nextPage = $upsells[$_SESSION["upholder"]]["next_page"];
			unset( $_SESSION["upholder"] );
			if( !$errorFound )
				{
					foreach( $bigwoo as $lilwoo )
						{
							if( $lilwoo["id"] == $thisproduct )
								{
									$_SESSION["upsells"][] =
										[
											"id" => $lilwoo["id"],
											"name" => $lilwoo["name"],
											"price" => $lilwoo["price"],
											"orderId" => $_GET["orderId"]
										];
								}
						}
				}

// https://breathegreeneco.com/_close/_return.php?errorFound=0&responseCode=100&transactionID=PAYID-LRAO5KI6G828755BK101864F&customerId=2313196&orderId=8833078&orderTotal=1.00&orderSalesTaxPercent=0.00&orderSalesTaxAmount=0.00&test=0&gatewayId=1606&prepaid_match=0&gatewayCustomerService=5555555555&gatewayDescriptor=PAYPAL+%2AMARGIN+LTD&subscription_id[1997]=92a651932ea2b5ffe6ae83b5ea09c732&ACS=https%3A%2F%2Fwww.paypal.com%2Fcgi-bin%2Fwebscr%3Fcmd&token=EC-5EK53589DL868051U&alt_pay_method=paypal

	}
else
	{

		if( $errorFound )
			{
				forward( "checkout-now" );
			}

		### MAIN PRODUCT
			foreach( $products as $product )
				{
					if( $product["id"] == $thisproduct )
						{
							### VALUES FOR RECEIPT PAGE(S)
								$_SESSION["mainProduct"] = $product["id"];
								$_SESSION["mainName"] = $product["name"];
								//$_SESSION["mainPrice"] = $product["price"];
								$_SESSION["mainPrice"] = number_format( ( $_GET["orderTotal"] - $product["ship_price"] ), 2 );
								$_SESSION["shipPrice"] = $product["ship_price"];
								$_SESSION["mainOrderId"] = $_GET["orderId"];
								$_SESSION["gatewayId"] = $_GET["gatewayId"];
								$_SESSION["usingPayPal"] = "YES";
							$nextPage = "upsell1";
						}
				}

	}


if( empty( $nextPage ) )
	{
		$_SESSION["errorMessage"] = "There was an issue with your order. Please contact ".SUPPORT_EMAIL;
		$nextPage = "checkout-now";
	}

// https://breathegreeneco.com/_close/inc/_return.php?errorFound=0&responseCode=100&transactionID=PAYID-LRAOASY7H4591285D095620H&customerId=2313176&orderId=8833048&orderTotal=2.00&orderSalesTaxPercent=0.00&orderSalesTaxAmount=0.00&test=0&gatewayId=1606&prepaid_match=0&gatewayCustomerService=5555555555&gatewayDescriptor=PAYPAL+%2AMARGIN+LTD&subscription_id[1993]=0645a29dacd3ea233c7155440e0d8808&subscription_id[2032]=d15084a720d72cf8fa0296cd500726ff&ACS=https%3A%2F%2Fwww.paypal.com%2Fcgi-bin%2Fwebscr%3Fcmd&token=EC-24U9520515492420J&alt_pay_method=paypal

forward( $nextPage );
