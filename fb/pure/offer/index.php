<?php
### THIS FILE: /index.php
session_start();
	$carry = "?" . $_SERVER[ "QUERY_STRING" ];
	$nextPage = "checkout.php" . $carry;
	if( !empty( $_GET["AFFID"] ) )
		{
			$_SESSION["AFFID"] = $_GET["AFFID"];
		}
	if( !empty( $_GET["click_id"] ) )
		{
			$_SESSION["click_id"] = $_GET["click_id"];
		}
	if( !empty( $_GET["C1"] ) )
		{
			$_SESSION["C1"] = $_GET["C1"];
		}
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
	</head>
	<body>
		<?php require_once( "pixels/_all_body.php" ); ?>
<div id="LoadingDiv" style="display:none;">
	Please wait&hellip;
	<img src="assets/images/_loading.gif" class="displayed" alt="" />
</div>
		<div id="section1">
			<div id="text1a">Don't miss our promo - Up to  <b style="color: #2196f3">55% OFF</b> - It's ending soon!</div>
		</div>
		<div id="section2">
			<div id="inner2">
				<div id="left2">
					<div id="text2a">
						<img src="assets/images/bg_logo.png" width="100%">
					</div>
					<div class="clear"></div>
					<div id="text2b"> 
						The Breathe Green PURE is a small discrete plug-in air purifier designed to combat some of the strongest odors in your home. Bacteria, viruses, pet odors, cigarette smoke, mold, and mildew are all kept in check with the effective purifying combination of activated oxygen and ionization. It's small and compact, and you just simply have to plug it in and you're all set!¹
					</div>
					<div class="clear"></div>
					<a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">
						<div id="button1" style="width:420px;">YES! I WANT UP TO 55% OFF!</div>
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
			<div id="text2c"> The miracle air purifying bag that works naturally as an odor remover and air purifier to maintain a fresh, breathable environment. </div>
			<div id="img2">
				<img src="assets/images/product1a.png" width="100%">
			</div>
			<a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">
				<div id="button2m"> YES! I WANT 50% OFF </div>
			</a>
		</div>
		<div id="section3">
<div id="inner3">

            <div id="text3b"> WHAT IS THE BREATH GREEN PURE AIR IONIZER? </div>

            <div id="text3a"> ECO-FRIENDLY AIR PURIFIER </div>


            <div id="listBox">

                <div class="floatList">

                    <div class="listHeader"> Easy to Use </div>

                    <ul class="listBullets">

                        <li class="listItem">Takes germs, bacteria and awful odors and bonds to them with healthy, negative ions.¹</li>
                        <li class="listItem">Plug in the purifier and forget about it - No need to replace expensive filters.</li>
                        <li class="listItem">Our purifier is compact and silent, making it discrete but effective.</li>

                    </ul>

                </div>

                <div class="floatList">

                    <div class="listHeader"> Long-Lasting </div>

                    <ul class="listBullets">

                        <li class="listItem">New technology that adds to your air quality without use of metal strips or needles.</li>
                        <li class="listItem">Addresses the odors in your air at the source, instead of just covering up the odors with chemicals and aerosols.¹</li>
                        <li class="listItem">Our purifier plugs right into the wall and is good to go for constant ionization or set on a timer for 30-minute intervals.</li>
                    </ul>

                </div>

                <div class="floatList">

                    <div class="listHeader"> Promotes Health &amp; Wellness<!--The Secret Ingredient--> </div>

                    <ul class="listBullets">
                        <li class="listItem">Reduces common dust and other living organisms like bacteria, pollutants, allergens and odors from the air for better breathing.¹</li>
                        <li class="listItem">Rest easy at night knowing you and your family can prevent the breathing in of toxins as you sleep.¹</li>
                        <li class="listItem">Generates negative ions which are known to improve mood and health for people and pets.¹</li>
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

                <!-- <i>"I am really impressed with how well this works! It is small and discrete, but incredibly effective. I have 2 huskies and bathe them often, but there are places that still end up smelling like wet dog. I easily placed one of these babies in there and boom, the odor went away! I didn't expect it to work so well or quickly, but I am happily surprised. I would definitely recommend this product for anyone who dislikes odors!"</i> -->

                <i>"My husband and I have always been conscious of air quality. When we heard about Breathe Green PURE we bought two, one for our bedroom and one for my home office. The day I got them, we had plumbers working on a sewer pipe in our basement. We had a lot of sewer gas in the bathroom so I plugged in a PURE. Within a short time the smell was gone! Unbelievable! It's incredible the amount and space that they purify! Our home smells fresh and clean. We also really like the fact that they are small enough to stick into a suitcase to travel with. Another product making a HAPPY customer!"</i>
                <br>

                <div style="font-weight: 700; font-size: 25px; text-align: right; padding-top: 25px;">-April Carey - Houston, TX</div>

            </div>

            <div class="clear"></div>

        </div>

        <div class="testimonialBox">

            <div class="testimonialImg imgB">

            </div>

            <div class="testimonialText">

                <!-- <i>"These Air Purifier work beautifully. I bought them because I had a leak under my kitchen sink. Even after repairs were made, it still smelt like mildew and mold. The bags were delivered quickly and I put one under the sink. It took the smell away within a few hours and continues to remove the smell of mold and mildew, as well as keep the moisture out of the cabinet. These Air Purifier are great!"</i> -->
                <i>"The PURE may be small, but it is mighty! I moved into my townhouse and the last owner was a smoker, so the entire house smelled like cigarettes and was musty. I tried every air freshener under the sun. Finally, I found Breathe Green PURE Air Purifiers and everything changed. When I got my first one, I just plugged it in to an open, uncovered outlet in the living room and it was all set! Within 24 hours, the downstairs smelled clean and there was no more cigarette stink. After that, I went online and bought 3 more, one for my kitchen, bathroom and bedroom. After 48 hours of them all plugged in, my entire house smelled clean and fresh. The best part about them is that you don't have to change air filters or replace bulbs or throw it out after a certain time period. These purifiers are the best investment I made for my house and I recommend them to anyone looking to purify the air in their house!"</i>
                <br>

                <div style="font-weight: 700; font-size: 25px; text-align: right; padding-top: 25px;">-Kathyrn Mach - Ankeny, IA</div>

            </div>

            <div class="clear"></div>

        </div>

        <div class="testimonialBox">

            <div class="testimonialImg imgC">

            </div>

            <div class="testimonialText">

                <!-- <i>"These are great, I put on in my gym bag and it no longer smells like a sweaty and gross gym bag! It takes away the sweat and stink smell and keeps my bag from getting mildew. Since they worked so well for my gym bag, I got another one and put it in my car. It has kept the brand new smell in my car, and keeps it from smelling and being gross, especially during those hot summer days."</i> -->
                <i>"These Breathe Green PURE Air Purifiers have been amazing for my allergies! Those that have asthma or allergies know to take their meds right before bed or you might wake up due to breathing issues. Well your sleepless nights are over! I have had my purifier for a while now and have been able to sleep through the night without issue. I cannot express how much my breathing has improved and how grateful I am for finding PURE Purifiers. They work so great that I got one for my cousin who's asthma is way worse than mine, and she is breathing so much better now!"</i>
                <br>

                <div style="font-weight: 700; font-size: 25px; text-align: right; padding-top: 25px;">-Rich McCarthy - New York, NY</div>

            </div>

            <div class="clear"></div>

        </div>

<p style="text-align:right;font-style:italic;color:#FFF;padding-right:4em">*Results May Vary</p>

    </div>
<div id="section5">

        <div id="text5a">Are you ready to start purifying your home and be on the path to breathing fresher, cleaner and purified air?</div>

        <div id="text5b">( TAKE ADVANTAGE OF OUR ONE-TIME SALE - UP TO 55% OFF - IT'S ENDING SOON! )</div>

        <a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">
            <div id="button2" style="font-size:25px;"> YES! I WANT UP TO 55% OFF! </div>
        </a>

    </div>
		<div id="section6">

<div class="" style="color:#444 !important;padding-left:4em;padding-right:4em;">
<p style="overflow-wrap: break-word;font-size:13px;">1. Int J Mol Sci. (2018, Oct 19) Negative Air Ions and Their Effects on Human Health and Air Quality Improvement https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6213340/</p>
</div>
<br>

			<div id="linkLine">
			<a href="<?=$folder;?>legal/contact.php" class="nyroModal textLink">Contact Us</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/terms.php" class="nyroModal textLink">Terms &amp; Conditions</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/privacy.php" class="nyroModal textLink">Privacy Policy</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/returns.php" class="nyroModal textLink">Returns</a>
			</div>
		</div>
<div id="stickyTop" style="display: none;">

        <div id="stickyInner">

            <div id="stickyImg">

                <img src="assets/images/stiky_logo.png" width="100%">

            </div>

            <div id="stickyText">

                <span style="font-size: 22px; font-weight: 500; color: #444;">Breathe Green PURE<!--Breathe Green Air Purifier--></span>

                <br> THE NATURAL WAY TO REDUCE ODORS &amp; ALLERGENS! </div>

            <a href="<?=$nextPage;?>" onclick="grayOut();" class="kform_presellLink">

                <div id="stickyButton"> YES! I WANT UP TO 55% OFF! </div>

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