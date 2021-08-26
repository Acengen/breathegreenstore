<?php
	require_once( "inc/_setup.php" );
	$subtotal = $_SESSION["mainPrice"];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>BreatheGreen</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="content-language" content="en-us">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=0">
		<link rel="icon" type="image/png" href="assets/images/logo1b.png">

		<link type="text/css" href="assets/css/app.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kprofile.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kform.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kcart.css" rel="stylesheet">
		<link type="text/css" href="assets/css/thanksv2.css" rel="stylesheet">
		<?php require_once( "pixels/_all.php" ); ?>
	</head>
	<body>
		<?php require_once( "pixels/_all_body.php" ); ?>
		<div id="header1">
			<div id="inner1">
				<img src="assets/images/logo1a.png" width="100%">
			</div>
		</div>
		<div id="text1"> Congrats - Order Complete! </div>
		<div id="text3"> 
			Your Order Id(s): 
			<?php
				echo $_SESSION["mainOrderId"];
				if( !empty( $_SESSION["upsells"] ) )
					{
						foreach( $_SESSION["upsells"] as $upsellid )
							{
								echo ", ".$upsellid["orderId"];
							}
					}
			?>
		</div>
		<div id="text2"> 
			<?php if( !empty( $_SESSION['gatewayDescriptor'] ) ){ ?>
				This charge will appear on your credit card statement as "<?=$_SESSION["gatewayDescriptor"];?>".<br>
			<?php }else{ ?>
				This charge will appear on your credit card statement as "<?=CHARGE_NOTICE;?>".<br>
			<?php } ?>
			You will receive an order confirmation email from us with the subject "Thank you for your purchase".<br> If you do not see it in your inbox, please check your spam folder. 
		</div>
		<div id="mainBox">
			<div id="title1">
				<div id="logo1">
					<img src="assets/images/check.png" width="100%">
				</div>
				<div id="line1"> Your Product Receipt: </div>
				<div class="clear"></div>
			</div>

			<div id="tableStyles">

<table class="kthanksItemsTable">
	<thead>
		<td class="pullLeft"><b>Product</b></td>
		<td class="pullRight"><b>Price</b></td>
</thead>
<tbody>
	<tr class="kthanks_row">
		<td><?=$_SESSION["mainName"];?></td>
		<td><?=CURRENCY;?><?=$_SESSION["mainPrice"];?></td>
	</tr>
<?php
if( !empty( $_SESSION["extraproduct" ] ) )
	{
		$subtotal += $addon["price"];
		?>
		<tr class="kthanks_row">
			<td><?=$addon["name"];?></td>
			<td><?=CURRENCY;?><?=$addon["price"];?></td>
		</tr>
		<?php
	}
if( is_array( $_SESSION["upsells"] ) )
	{
		foreach( $_SESSION["upsells"] as $eachupsell )
			{
				$subtotal += $eachupsell["price"];
				?>
				<tr class="kthanks_row">
					<td><?=$eachupsell["name"];?></td>
					<td><?=CURRENCY;?><?=$eachupsell["price"];?></td>
				</tr>
				<?php
			}
	}
	$grandtotal = $subtotal + $_SESSION["shipPrice"];
	if( empty( $_SESSION["shipPrice"] ) ){ $_SESSION["shipPrice"] = 0.00; }
?>
</tbody>
</table>

			</div>
			<div id="totalText2a">
				<div class="pullLeft">Subtotal</div>
				<div class="pullRight"><?=CURRENCY;?><?=$subtotal;?></div>
				<div class="clear"></div>
			</div>
			<div id="totalText2b">
				<div class="pullLeft">Shipping</div>
				<div class="pullRight"><?=CURRENCY;?><?=number_format($_SESSION["shipPrice"],2);?></div>
				<div class="clear"></div>
			</div>
			<div id="totalText2">
				<div class="pullLeft">Grand Total</div>
				<div class="pullRight">
					<strong><?=CURRENCY;?><?=number_format($grandtotal,2);?></strong>
				</div>
				<div class="clear"></div>
			</div>
			<div id="title2">
				<div id="logo2">
					<img src="assets/images/lock.png" width="100%">
				</div>
				<div id="line2"> Feel free to email or call us with any questions: </div>
				<div class="clear"></div>
			</div>
			<div id="emailBlock">
				<div id="mailIcon">
					<img src="assets/images/mailicon.png" width="100%">
				</div>
				<div id="mailText">
					<div id="mail1"> Email: <?=SUPPORT_EMAIL;?> </div>
					<div id="mail1"><?=SUPPORT_PHONE;?></div>
					<div id="mail2"> If you have any questions about your order, please email or call us and we will get back to you within 24 hours. </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="footerText">&copy;<?=date("Y");?> &ndash; <?=COPYRIGHT;?> &ndash; All Rights Reserved</div>
	</body>
</html>