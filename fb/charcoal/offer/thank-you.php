<?php
	require_once( "inc/_setup.php" );
	$upsell = 3;
	$nothanks = $folder . $upsells[$upsell]["next_page"] . ".php";
	$subtotal = $_SESSION["mainPrice"];
	$grandtotal = 0;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>BreatheGreen</title>
		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="content-language" content="en-us">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=0">
		<link rel="icon" type="image/png" href="assets/images/logo1b.png">

		<link type="text/css" href="assets/css/app.css" rel="stylesheet">
		<link type="text/css" href="assets/css/loadering.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kprofile.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kform.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kcart.css" rel="stylesheet">
		<link type="text/css" href="assets/css/thanksv2.css" rel="stylesheet">
		<?php require_once( "pixels/_all.php" ); ?>
	</head>
	<body>
		<?php require_once( "pixels/_all_body.php" ); ?>
<div id="LoadingDiv" style="display:none;">
	Please wait&hellip;
	<img src="assets/images/_loading.gif" class="displayed" alt="" />
</div>
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
				if( !empty( $_SESSION["extraproduct"] ) )
					{
						echo ", ".$_SESSION["extraproduct"];
					}
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
			This charge will appear on your credit card statement as "<?=$_SESSION["gatewayDescriptor"];?>".<br>
			You will receive an order confirmation email from us with the subject "Thank you for your purchase".<br> If you do not see it in your inbox, please check your spam folder. 
		</div>
		<div id="mainBox">
			<div class="thank_bottom" style="text-align: left;">
				<div class="oto"> <img src="assets/images/oto-1.png"></div>
				<p><strong><u>IMPORTANT NOTE:</u> </strong> If you passed up on our offer for an extra Breathe Green Charcoal Bag a moment ago OR you need MORE (most people get extras - and these make Awesome gifts), then check this out... our manufacturer just told us that we have one final crate coming in with more supply and wanted you as a new customer to be the first to have the opportunity to get more if you want... if you want 3 more Breathe Green Charcoal Bags at just $8.32 each ($24.95 TOTAL) <a style=" color: blue; text-decoration:underline;cursor: pointer;" onclick="submitpro();">Click here...</a> if not, continue below.</p>
			</div>
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
		<td><?=$productName;?> (<?=$_SESSION["mainName"];?>)</td>
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
					<strong><?=CURRENCY;?><?=$grandtotal;?></strong>
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
			<br><br>
			<p><strong>P.S.</strong> the offer above is limited to now only with this bit of extra inventory and this crazy-low, limited price-cut... if you close this page you won’t see it... again, only if you want to stock up on more and not risk us being sold out if you want to order more as gifts... or extras for yourself!</p>
			<p style="text-align: center; font-weight: bold"><a style=" color: blue; text-decoration:underline;cursor: pointer;" onclick="submitpro();">→ Click here if you want it... ←</a></p>
		</div>
		<div id="footerText">&copy;<?=date("Y");?> &ndash; <?=COPYRIGHT;?> &ndash; All Rights Reserved</div>
		<form method="POST" action="inc/_upsell.php<?=$carry;?>" id="upsell" onsubmit="grayOut();">
			<input type="hidden" name="upsell" value="<?=$upsell;?>">
			<input type="hidden" name="productid" value="<?=$upsells[$upsell]["products"][1]["id"];?>">
		</form>
		<script>
			window._conv_q = window._conv_q || [];
			_conv_q.push(["sendRevenue","","<?=$grandtotal;?>","1","100022202"]);
			function submitpro()
				{ $( "#upsell" ).submit(); }
			$(window).scroll(function(){
			var y_scroll_pos = $(this).scrollTop();
			var scroll_pos_test = 100;  
			if(y_scroll_pos  > scroll_pos_test){
			    $('#side_arrow').removeClass('side_arrow_up');
			    $('#side_arrow').addClass('side_arrow');
			}
			else{
			    $('#side_arrow').removeClass('side_arrow');
			    $('#side_arrow').addClass('side_arrow_up');
			}
			});
			function grayOut(){
				$('#LoadingDiv').show();
				setTimeout(function(){
					$('#LoadingDiv').hide();
				}, 4000);
			}
		</script>
<?php require_once( "pixels/_receipt.php" ); ?>
	</body>
</html>