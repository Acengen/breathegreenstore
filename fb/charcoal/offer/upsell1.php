<?php
	require_once( "inc/_setup.php" );
	$upsell = 1;
	$nothanks = $folder . $upsells[$upsell]["next_page"] . ".php".$carry;
	$_SESSION["upsells"] = [];
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
		<link type="text/css" href="assets/css/loadering.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kprofile.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kform.css" rel="stylesheet">
		<link type="text/css" href="assets/css/kcart.css" rel="stylesheet">
		<?php require_once( "pixels/_all.php" ); ?>
		<script type="text/javascript">
			window._conv_q = window._conv_q || [];
			_conv_q.push(["triggerConversion","100022197"]);
		</script>
	</head>
	<body>
		<?php require_once( "pixels/_order.php" ); ?>
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
		<div id="mainBox">
			<div id="mainText1">
				<span style="font-size: 37px;"><span style="color: #ff9919; font-weight: bold;">WAIT!</span> Don't forget to put one in your car!</span>
				<br> To thank you for your purchase, we are giving you 1 extra bag for <span style="font-weight: bold; color: #159932;">FREE</span>! (Just pay for shipping) 
			</div>
			<div id="breakLine"></div>
			<div id="innerMain">
				<div id="innerLeft">
					<div id="highlightImg">
						<img src="assets/images/up1a.jpg" width="100%">
					</div>
				</div>
				<div id="innerRight">
					<div id="rightText1"> Get 1 <b>FREE Breathe Green Eco-Friendly Charcoal Bag</b> For Your Car (Just pay for shipping) </div>
					<div id="rightList">
						<ul style="padding-left: 0px;">
							<li>Odor eliminator for cars</li>
							<li>Gets rid of cigarette smoke flawlessly</li>
							<li>Brings back that brand new car smell</li>
							<li>100% natural</li>
							<li>Lasts up to 2 years</li>
						</ul>
					</div>
					<form method="POST" action="inc/_upsell.php<?=$carry;?>" onsubmit="grayOut();">
							<input type="hidden" name="upsell" value="<?=$upsell;?>">
							<input type="hidden" name="productid" value="<?=$upsells[$upsell]["products"][1]["id"];?>">
						<input type="submit" value="Yes! I Want 1 Extra Breathe Green Charcoal Bag FREE!" class="kform_upsellBtn" id="kformSubmit" style="white-space: normal;">
						<p class="text-center">*Just pay <?=CURRENCY;?><?=$upsells[$upsell]["products"][1]["price"];?> for shipping &amp; handling</p>
					</form>
				</div>
				<div class="clear"></div>
			</div>
			<p class="no_thanks"><a href="<?=$nothanks;?>" onclick="grayOut();" id="no-thanks" class="textLink" style="font-size: 14px;">No thanks, I don't want an extra bag for free.</a></p>
		</div>
		<div id="footerText">&copy;<?=date("Y");?> &ndash; <?=COPYRIGHT;?> &ndash; All Rights Reserved</div>

		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<script>
		<?php
			if( $_SESSION['purchasefire'] != "YES" )
				{
					$_SESSION['purchasefire'] = "YES";
					$subtotal = $_SESSION["mainPrice"];
					if( !empty( $_SESSION["extraproduct" ] ) )
						{ $subtotal += $addon["price"]; }
					echo "fbq('track', 'Purchase', {currency:'USD',value:'{$subtotal}'});";
				}
		?>
		function grayOut(){
			$('#LoadingDiv').show();
			setTimeout(function(){
				$('#LoadingDiv').hide();
			}, 4000);
		}
		</script>
	</body>
</html>