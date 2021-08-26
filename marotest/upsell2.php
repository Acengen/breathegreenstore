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
		<?php require_once( "pixels/_all.php" ); ?>
<style type="text/css">
        body {
            margin: 0 0 0 0;
            font-family: 'Lato', sans-serif;
            background: #f1f4f8;
			overflow-x:hidden;
        }
        a:link,
        a:visited {
            text-decoration: inherit;
            color: inherit;
        }
        a.textLink:link,
        a.textLink:visited {
            text-decoration: inherit;
            color: #00F;
        }
        a.textLink:hover {
            text-decoration: underline;
        }
        .clear {
            clear: both;
        }
        #header1 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            background: #fff;
            padding-top: 10px;
            padding-bottom: 5px;
            border-bottom: 5px solid #eee;
        }
        #inner1 {
            width: 200px;
            height: auto;
            margin: 0 auto;
        }
        #mainBox {
            max-width: 1110px;
            width: 100%;
            height: auto;
            margin: 0 auto;
            margin-top: 22px;
            background: #fff;
            padding-top: 40px;
            padding-bottom: 15px;
            border: 1px solid #ddd;
        }
        #mainText1 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            text-align: center;
            font-family: 'Oswald', sans-serif !important;
            font-size: 24px;
        }
        #breakLine {
            width: 100%;
            height: 1px;
            margin: 0 auto;
            background: rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
        #innerMain {
            max-width: 1050px;
            width: 100%;
            height: auto;
            margin: 0 auto;
            margin-top: 25px;
            padding-bottom: 25px;
        }
        #innerLeft {
            width: 420px;
            height: auto;
            float: left;
            padding: 0px 15px;
        }
        #highlightImg {
            width: 420px;
            height: 420px;
            margin: 0 auto;
        }
        #innerRight {
            width: 550px;
            height: auto;
            float: right;
            padding: 0px 15px;
        }
        #rightText1 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            font-size: 30px;
            font-family: 'Lato', sans-serif;
            color: #2e2e2e;
        }
        #rightList {
            width: 85%;
            height: auto;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 25px;
        }
        #rightList li {
            list-style-type: none;
            font-size: 15px;
            padding: 10px 10px;
            line-height: 1.42857143;
            background-repeat: no-repeat;
            background-position: 7px 9px;
            padding-left: 60px;
            background-image: url(assets/images/arrowbullet.png);
            font-family: sans-serif;
            box-sizing: border-box;
        }
        #innerSub {
            width: 930px;
            height: auto;
            margin: 0 auto;
        }
        .botImg {
            width: calc(33% - 30px);
            height: auto;
            float: left;
            padding: 0px 15px;
        }
        #footerText {
            width: 100%;
            height: auto;
            margin: 0 auto;
            margin-top: 40px;
            text-align: center;
            color: #222;
            font-size: 15px;
            padding-bottom: 50px;
        }
		#innerRight .textLink{color: gray;}
		.no_thanks{width:100%; text-align:center;}
		.no_thanks .textLink{color: gray !important; text-decoration:none;}
        .kform_upsellBtn{-webkit-appearance: none;}
        @media (min-width: 768px) and (max-width: 1024px){
                #innerLeft {
                    width: 100%;
                    height: auto;
                    float: left;
                    padding: 0px;
                }
                #innerRight {
                    width: 100%;
                    height: auto;
                    float: right;
                    padding: 0px;
                }
                #highlightImg {
                    <!--width: 100%;-->
                    height: auto;
                    margin: 0 auto;
                }
        }
        @media (min-width: 476px) and (max-width: 675px){
                #innerLeft {
                    width: 100%;
                    height: auto;
                    float: left;
                    padding: 0px;
                }
                #innerRight {
                    width: 100%;
                    height: auto;
                    float: right;
                    padding: 0px;
                }
                #highlightImg{
                    margin: 0 auto;
                    width: 100%;
                    height: auto;
                }
            }
@media only screen and (max-width: 1024px){
 #mainBox{padding-left:20px; padding-right:20px; box-sizing:border-box;}
}
@media only screen and (max-width: 767px){
#innerLeft{float:none; margin:0 auto;}
#innerRight{width:100%;}
}
        @media only screen and (max-width: 475px){
            #innerLeft{
                width: 100%;
                height: auto;
                padding: 0;
            }
            #highlightImg{
                width: 100%;
                height: 420px;
                margin: 0 auto;
            }
            #innerRight{
                width: 100%;
                height: auto;
                padding: 0;
            }
            #rightText1{
                width: 100%;
                height: auto;
                margin: 0 auto;
                font-size: 20px;
                font-family: 'Lato', sans-serif;
                color: #2e2e2e;
                text-align: center;
            }
            #rightList{
                width: 100%;
                height: auto;
                margin: 0 auto;
                margin-top: 20px;
                margin-bottom: 25px;
            }
        }
    </style>
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
            <span style="font-size: 37px;">Breathe Green Charcoal Bags - Naturally Deodorize Your Home</span>
            <br>Incredibly Effective At Neutralizing Odors, Mold, Mildew, Bacteria and Allergens.</div>
			<div id="breakLine"></div>
			<div id="innerMain">
				<div id="innerLeft">
					<div id="highlightImg">
						<img src="assets/images/product1a_new.png" style="box-shadow: 1px 1px 5px rgba(68,68,68,0.5);" width="100%">
					</div>
				</div>
<div id="innerRight">
                <div id="rightText1">Get 2 <b>Breathe Green Charcoal Bags for Only $19.95!</b></div>
                <div id="rightList">
                    <ul style="padding-left: 0px;">
                        <li>Breathe Green Charcoal Bags are filled with one ingredient - Activated, All-Natural Bamboo Charcoal. Air passes through the pores in the charcoal and traps odor, allergen and bacteria particles, deodorizing and refreshing your air.</li>
                        <li>Simply place the bag in hard to reach places and/or places without an outlet, and you're all set. Every month, place the bag in the sun to recharge the charcoal and put it back where you had it.</li>
                        <li>Our charcoal bags absorb excess moisture to continuously work to maintain a fresh, odor-free, and dry environment. They are also non-toxic, non-fragrant, chemical free and eco-friendly.</li>
                    </ul>
                </div>
					<form method="POST" action="inc/_upsell.php<?=$carry;?>" onsubmit="grayOut();" style="text-align: center;">
							<input type="hidden" name="upsell" value="<?=$upsell;?>">
							<input type="hidden" name="productid" value="<?=$upsells[$upsell]["products"][1]["id"];?>">
						<input type="submit" value="YES! I Want 2 Breathe Green Charcoal Bags!" class="kform_upsellBtn" id="kformSubmit" style="white-space: normal;">
						<br>Shipping is FREE!<br><br>
					</form>
				</div>
				<div class="clear"></div>
			</div>
			<p class="no_thanks"><a href="<?=$nothanks;?>" onclick="grayOut();" id="no-thanks" class="textLink" style="font-size: 14px;">No thanks, I don't want to deodorize my home.</a></p>
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