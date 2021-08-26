<?php
	require_once( "inc/_setup.php" );
	$upsell = 2;
	$nothanks = $folder . $upsells[$upsell]["next_page"] . ".php".$carry;
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
		<link type="text/css" href="assets/css/upsell2.css" rel="stylesheet">
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
		<div id="mainBox">
			<div id="mainText1">
				<span style="font-size: 34px;"><span style="color: #ff9919; font-weight: bold;">FINAL STEP!</span> Check out this amazing product today.</span>
				<br> As one of our valued customers, we are offering you <span style="font-weight: bold; color: #159932;">50% OFF</span> on this product! 
			</div>
			<div id="innerMain">
				<div id="innerTop">
					<div id="topText1"> Breathe Green Charcoal Shoe Bags </div>
					<ul id="topList1">
						<li class="topItem"><b>100% Natural –</b> fragrance free, chemical free &amp; non-toxic</li>
						<li class="topItem">Prevents mold, mildew &amp; bacteria by absorbing excess moisture</li>
						<li class="topItem">Convenient way to maintain a fresh, dry, odor free environment</li>
						<li class="topItem"><b>Rejuvenate –</b> place the bags outside in the sun every once in a while to reactivate and resume the function of carbon </li>
					</ul>
					<div class="breakLine"></div>
				</div>
			</div>
			<div id="innerBot">
				<div id="botLeft">
					<div class="botTitle">
						<?=$upsells[$upsell]["products"][1]["name"];?>
					</div>
					<div class="botImg">
						<img src="assets/images/tbdlogo1.jpg" width="100%">
					</div>
						<form method="POST" action="inc/_upsell.php<?=$carry;?>" onsubmit="grayOut();">
							<input type="hidden" name="upsell" value="<?=$upsell;?>">
							<input type="hidden" name="productid" value="<?=$upsells[$upsell]["products"][1]["id"];?>">
							<input type="submit" value="YES! I want to ADD 1 Pair of Breathe Green Charcoal Shoe Bags for Just <?=CURRENCY;?><?=$upsells[$upsell]["products"][1]["price"];?> (Normally <?=CURRENCY;?>40)" class="kform_upsellBtn" style="white-space: normal;">
					</form>
					<input type="hidden" id="kformSubmit">
				</div>
				<div id="botRight">
					<div class="botTitle">
					<?=$upsells[$upsell]["products"][2]["name"];?>
					</div>
					<div class="botImg">
						<img src="assets/images/tbdlogo3.jpg" width="100%">
					</div>
						<form method="POST" action="inc/_upsell.php<?=$carry;?>" onsubmit="grayOut();">
							<input type="hidden" name="upsell" value="<?=$upsell;?>">
							<input type="hidden" name="productid" value="<?=$upsells[$upsell]["products"][2]["id"];?>">
							<input type="submit" value="YES! I want to ADD 3 Pairs of Breathe Green Charcoal Shoe Bags for Just <?=CURRENCY;?><?=$upsells[$upsell]["products"][2]["price"];?> (Normally <?=CURRENCY;?>120)" class="kform_upsellBtn" style="white-space: normal;">
						</form>
				</div>
				<div class="clear"></div>
				<div id="lastLink" style="text-align:center;">
					<br>
					<a href="<?=$nothanks;?>" onclick="grayOut();" id="no-thanks" class="textLink">No thanks, I don’t want to make my shoes smell CLEAN &amp; FRESH.</a>
				</div>
			</div>
		</div>
		<div id="footerText">&copy;<?=date("Y");?> &ndash; <?=COPYRIGHT;?> &ndash; All Rights Reserved</div>

		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<script>
		function grayOut(){
			$('#LoadingDiv').show();
			setTimeout(function(){
				$('#LoadingDiv').hide();
			}, 4000);
		}
		</script>
	</body>
</html>