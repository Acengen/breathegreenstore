<?php
### THIS FILE: /index.php
session_start();
	$carry = "?" . $_SERVER[ "QUERY_STRING" ];
	$nextPage = "checkout.php" . $carry;
	if( !empty( $_GET["AFFID"] ) )
		{ $_SESSION["AFFID"] = $_GET["AFFID"]; }
	if( !empty( $_GET["click_id"] ) )
		{ $_SESSION["click_id"] = $_GET["click_id"]; }
	if( !empty( $_GET["C1"] ) )
		{ $_SESSION["C1"] = $_GET["C1"]; }
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

		<link rel="stylesheet" href="assets/css/nyroModal.css">
		<link rel="stylesheet" href="assets/css/app.css">
		<link type="text/css" href="assets/css/loadering.css" rel="stylesheet">
		<link type="text/css" href="assets/css/style-index.css" rel="stylesheet">
		<?php require_once( "pixels/_all.php" ); ?>
<style type="text/css">
li{ line-height:1.75 }
</style>

<?php /* if($_SESSION['taboola']=="RACK2"){ ?>
<script>
    _tfa.push({notify: 'event', name: 'view_content', id: 1258049});
</script>
<?php } */ ?>

	</head>
	<body>
		<?php require_once( "pixels/_all_body.php" ); ?>
<?php /* if($_SESSION['taboola']=="RACK2"){ ?>
<noscript>
    <img src='https://trc.taboola.com/1258049/log/3/unip?en=view_content'
        width='0' height='0' style='display:none'/>
</noscript>
<?php unset($_SESSION['taboola']); } */ ?>
<div id="LoadingDiv" style="display:none;">
	Please wait&hellip;
	<img src="assets/images/_loading.gif" class="displayed" alt="" />
</div>
		<div id="section1">
			<div id="text1a"> Don't miss our <b style="color: #2196f3">50% OFF</b> promo. It's ending soon.</div>
		</div>
		<div id="section2">
			<div id="inner2">
				<div id="left2">
					<div id="text2a">
						<img src="assets/images/bg_logo.png" width="100%">
					</div>
					<div class="clear"></div>
					<div id="text2b">The 100% natural solution that works as both an odor deterrent and air purifier to maintain a fresh and breathable environment for your family.<small><sup>[1]</sup></small></div>
					<div class="clear"></div>
					<a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">
						<div id="button1"> YES! I WANT 50% OFF </div>
					</a>
					<div class="clear"></div>
				</div>
				<div id="right2">
					<div id="img2p">
						<img src="assets/images/product1a.png" width="100%">
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="section2m">
			<div id="text2c">The 100% natural solution that works as both an odor deterrent and air purifier to maintain a fresh and breathable environment for your family.<small><sup>[1]</sup></small></div>
			<div id="img2">
				<img src="assets/images/product1a.png" width="100%">
			</div>
			<a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">
				<div id="button2m"> YES! I WANT 50% OFF </div>
			</a>
		</div>
		<div id="section3">
			<div id="inner3">
				<div id="text3a">THE BREATHE GREEN ECO-FRIENDLY CHARCOAL BAG WORKS NATURALLY TO</div>
				<div id="text3b">REDUCE ODORS &amp; ALLERGENS / HELP PREVENT MOLD &amp; MILDEW<small><sup>[2]</sup></small></div>
				<div id="text3c">
					<ul class="listBullets3">
						<li class="listItem3">Simply place the bag in or near shoes, gym bags, luggage, suitcases, cars, bathrooms, freshly painted walls, fridges, etc.</li>
						<li class="listItem3">Every month, leave the bag out to rest in the sun for an hour to "refresh" the bag, making it ready to use again!</li>
						<li class="listItem3">After 2 years of fresher air, simply cut open the bag and sprinkle around your garden to improve soil quality!</li>
					</ul>
				</div>
				<div id="listBox">
					<div class="floatList">
						<div class="listHeader"> Stylish. Simple. Effective. </div>
						<ul class="listBullets">
							<li class="listItem">Beautifully stitched linen bags containing extremely porous bamboo charcoal. For added convenience a metal grommet is embedded in the upper left corner.</li>
							<li class="listItem">Place the Breathe Green Eco-Friendly Charcoal Bags in numerous locations such as your car, closet, bathroom or any enclosed areas in your home and office.</li>
							<li class="listItem">Reduces toxins from the air, trapping them inside. Unlike Febreze which ADDS toxins to your air!<small><sup>[2]</sup></small></li>
						</ul>
					</div>
					<div class="floatList">
						<div class="listHeader"> More Than A Deodorizer </div>
						<ul class="listBullets">
							<li class="listItem">Our air purifiers effectively work to help dissipate unwanted odors, allergens, pollutants, bacteria and help prevent mold/mildew.<small><sup>[2]</sup></small></li>
							<li class="listItem">Keep food fresher by absorbing moisture, bacteria & mold before they spoil your food and waste your money.<small><sup>[1]</sup></small></li>
							<li class="listItem">Wicks moisture out of the air, keeping things like shoes & gym bags dry, which may prevent odors before they start!<small><sup>[2]</sup></small></li>
						</ul>
					</div>
					<div class="floatList">
						<div class="listHeader"> The Secret Ingredient </div>
						<ul class="listBullets">
							<li class="listItem">Breathe Green Eco-Friendly Charcoal Bags are filled with just one ingredient - Activated Bamboo Charcoal. As air passes through the pores in the charcoal, odor, allergen and bacteria particles in the air are trapped on the surface, which in turn aids to purify the air.<small><sup>[2]</sup></small></li>
							<li class="listItem">Bamboo charcoal has been scientifically proven to reduce harmful chemicals including formaldehyde, ammonia, benzene and chloroform gases emitted from such items as paint, carpeting, air fresheners, chemical cleaners, rubber and plastic.<small><sup>[2]</sup></small></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div id="section4">
			<div id="text4a"> - WHAT PEOPLE ARE SAYING - </div>
			<div class="testimonialBox">
				<div class="testimonialImg imgA">
				</div>
				<div class="testimonialText">
					<i>"I am really impressed with how well this works! It is small and discrete, but incredibly effective. I have 2 huskies and bathe them often, but there are places that still end up smelling like wet dog. I easily placed one of these babies in there and boom, the odor went away! I didn't expect it to work so well or quickly, but I am happily surprised. I would definitely recommend this product for anyone who dislikes odors!"</i>
					<br>
					<div style="font-weight: 700; font-size: 25px; text-align: right; padding-top: 25px;">-Allison Green from North Haven, CT</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="testimonialBox">
				<div class="testimonialImg imgB">
				</div>
				<div class="testimonialText">
					<i>"These Charcoal Bags work beautifully. I bought them because I had a leak under my kitchen sink. Even after repairs were made, it still smelt like mildew and mold. The bags were delivered quickly and I put one under the sink. It took the smell away within a few hours and continues to remove the smell of mold and mildew, as well as keep the moisture out of the cabinet. These Charcoal Bags are great!"</i>
					<br>
					<div style="font-weight: 700; font-size: 25px; text-align: right; padding-top: 25px;">-Lena Gardner from Houston, TX</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="testimonialBox">
				<div class="testimonialImg imgC">
				</div>
				<div class="testimonialText">
					<i>"These are great, I put on in my gym bag and it no longer smells like a sweaty and gross gym bag! It takes away the sweat and stink smell and keeps my bag from getting mildew. Since they worked so well for my gym bag, I got another one and put it in my car. It has kept the brand new smell in my car, and keeps it from smelling and being gross, especially during those hot summer days."</i>
					<br>
					<div style="font-weight: 700; font-size: 25px; text-align: right; padding-top: 25px;">-Timothy Plaisance from Reno, NV</div>
				</div>
				<div class="clear"></div>
			</div>
<div class="text-right" style="margin-right:4em;color:#FFF;"><small><i>*Results May Vary</i></small></div>
		</div>
		<div id="section5">
			<div id="text5a"> Are you ready to breathe fresh, clean and naturally purified air? </div>
			<div id="text5b"> (Take advantage of our one-time 50% off sale - its ending soon!) </div>
			<a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">
				<div id="button2"> YES! I WANT 50% OFF</div>
			</a>
		</div>
		<div id="section6">

<div class="" style="color:#444 !important;padding-left:4em;padding-right:4em;">
<p style="overflow-wrap: break-word;font-size:13px;">1. Norman R. Rowe (1963) Odor Control with Activated Charcoal, Journal of the Air Pollution Control Association, 13:4, 150-153, DOI: 10.1080/00022470.1963.10468157 https://www.tandfonline.com/doi/abs/10.1080/00022470.1963.10468157</p>
<p style="overflow-wrap: break-word;font-size:13px;">2. S. Das (2012, January) Current Trends in Technology and Science of Carbon Nanosphere From Bamboo And Its Use In Water Purification  https://www.researchgate.net/publication/280302258_Current_Trends_in_Technology_and_Science_Preparation_of_Carbon_Nanosphere_From_Bamboo_And_Its_Use_In_Water_Purification</p>
</div>
<br>

			<div id="linkLine">
			<a href="<?=$folder;?>legal/contact.php" class="nyroModal textLink">Contact Us</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/terms.php" class="nyroModal textLink">Terms &amp; Conditions</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/privacy.php" class="nyroModal textLink">Privacy Policy</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/returns.php" class="nyroModal textLink">Returns</a>
			</div>
		</div>
		<div id="stickyTop">
			<div id="stickyInner">
				<div id="stickyImg">
					<img src="assets/images/stiky_logo.png" width="100%">
				</div>
				<div id="stickyText">
					<span style="font-size: 22px; font-weight: 500; color: #444;">Breathe Green Charcoal Bags</span>
					<br> THE NATURAL WAY TO REDUCE ODORS &amp; ALLERGENS! 
				</div>
				<a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">
					<div id="stickyButton"> YES! I WANT 50% OFF </div>
				</a>
				<div id="stickyArrow">
					<img src="assets/images/gright2.png" width="100%">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.nyroModal.min.js"></script>
		<script>
			$(document).ready(function() {
					$( ".nyroModal" ).nyroModal();
					$(window).scroll(function() {
							if ($(window).scrollTop() > 340 && $(window).scrollTop() < 1400) {
									$('#stickyTop').show();
							} else {
									$('#stickyTop').hide();
							}
					});
			});
		function grayOut(){
			$('#LoadingDiv').show();
			setTimeout(function(){
				$('#LoadingDiv').hide();
			}, 4000);
		}
		</script>
	</body>
</html>