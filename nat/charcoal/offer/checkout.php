<?php
	require_once( "inc/_setup.php" );
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

		<link type="text/css" href="assets/css/nyroModal.css" rel="stylesheet">
		<link type="text/css" href="assets/css/app.css" rel="stylesheet">
		<link type="text/css" href="assets/css/loadering.css" rel="stylesheet">
		<link type="text/css" href="assets/css/chk_merge.css" rel="stylesheet">
		<link type="text/css" href="assets/css/style-checkout-new.css" rel="stylesheet">
		<?php require_once( "pixels/_all.php" ); ?>

	</head>
	<body>
		<?php require_once( "pixels/_all_body.php" ); ?>
<div id="LoadingDiv" style="display:none;">
	Please wait&hellip;
	<img src="assets/images/_loading.gif" class="displayed" alt="" />
</div>
		<div id="header1">
			<div id="checkoutSection" class="header-cont">
				<div id="inner1">
					<img src="assets/images/logo1a.png" width="100%">
				</div>
				<div class="natural">
					<h2>"Naturally Purify Air - Reduce Embarrassing Odors: <span>GUARANTEED!"</span></h2>
				</div>
				<div class="about-container">
					<a class="button-look" onclick="javascript:openNewWindow(&#39;/charcoal//contact.php&#39;,&#39;modal&#39;)" style="cursor:pointer">
					<span>Call 24/7: 1(800)760-7015</span>
					</a>
				</div>
			</div>
		</div>
		<div id="section2">
			<div id="checkoutSection" style="max-width:1000px;">
				<div id="inner2">
					<img src="assets/images/product1a.png" width="100%">
				</div>
				<div class="five-stars">
					<div class="sec_img">
						<img src="assets/images/five-stars.jpg" width="100%">
						<p class="saving" id="Inven_ini" style="display: none;">Inventory Checking<span>.</span><span>.</span><span>.</span></p>
						<p style="" id="Inven_aft">Inventory check... <img src="assets/images/right.jpg" style="vertical-align: bottom; width: 20px;    display: inline-block;"></p>
						<img class="paypal-new" src="assets/images/paypal-new.jpg" width="100%">
					</div>
					<div class="sec_img sec_img_last">
						<img src="assets/images/trusted-store.jpg" width="100%">
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<form id="kform" class="kform" method="post" action="<?=$folder;?>inc/_step1.php<?=$carry;?>" name="downsell_form1" accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8" novalidate="novalidate">
			<input type="hidden" name="limelight_charset" id="limelight_charset" value="utf-8"> 
			<input type="hidden" name="quantity" id="quantity" value="1"> 
			<input type="hidden" name="campaigns[1][id]" id="campaign_id" value="2"> 
			<div id="checkoutSection">
				<div class="chk_section1">
					<div class="tm text-center">
						<p></p>
						<h4><b>The More Bags You Buy, The Lower Your Cost Per Bag!</b></h4>
						<p></p>
					</div>
					<div class="container1 content fields1" id="formfields">
						<h3></h3>
						<div class="row">
							<div class="col-md-6 col-sm-6 checkout-column" id="billinfo">
								<div class="panel panel-default checkout-box">
									<div class="panel-heading display-table">
										<div class="row display-tr">
											<h4 class="panel-title display-td">Order Step 1 :</h4>
										</div>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label"><strong>First Name:</strong></label> 
													<input type="text" id="firstName" name="firstName" placeholder="First Name" class="required form-control field text-input" data-error-message="Please enter your first name!">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label"><strong>Last Name:</strong></label> 
													<input type="text" id="lastName" name="lastName" placeholder="Last Name" class="required form-control field text-input" data-error-message="Please enter your last name!">
												</div>
											</div>
											<div class="col-sm-12" id="email_div">
												<div class="form-group">
													<label class="control-label"><strong>Email Address:</strong></label> 
													<input type="email" id="email" name="email" placeholder="Email Address" class="required form-control field text-input" data-validate="email" data-error-message="Please enter a valid email id!">
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<label class="control-label" style="display:block"><strong>Phone</strong></label> 
													<input type="tel" id="phone" name="phone" placeholder="Phone" class="required form-control" data-validate="phone" maxlength="10" data-min-length="10" data-max-length="15" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, &#39;&#39;);" data-error-message="Please enter a valid contact number!">
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="test">
									<input type="submit" name="" class="cst_btn btn btn-success btn-lg btn-block" value="NEXT STEP">
									<p id="loading-indicator" style="display:none;">Processing...</p>
									<p id="crm-response-container" style="display:none;">Limelight messages will appear here...</p>
                <p style="color:gray"><br>
                    <u><a href="<?=$folder;?>legal/terms.php" class="nyroModal textLink" style="color:gray">
											*Terms
										</a> Apply</u>
                </p>
								</div>
							</div>
							<div class="hide-area"></div>
							<div class="col-md-6 col-sm-6 checkout-column" id="payinfo">
								<div class="panel panel-default checkout-box">
									<div class="panel-heading display-table">
										<div class="row display-tr">
											<h4 class="panel-title display-td">Breathe Green: Certified Trusted Brand </h4>
										</div>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="banner">
												<div class="col-md-8 col-sm-6 text-center banner__image marginCenter">
													<span class="visible-xs visible-sm visible-md visible-lg">
													<img alt="" src="assets/images/logo1a.png">
													</span>
												</div>
												<div class="col-md-4 col-sm-6 text-center banner__image marginCenter">
													<span class="visible-xs visible-sm visible-md visible-lg">
													<img alt="" src="assets/images/soles.png">
													</span>
												</div>
											</div>
										</div>
										<div class="row" id="kform_paySourceCard">
											<div class="col-xs-12" id="kformPaySourceWrap">
												<div class="center-block"><img class="img-responsive" src="assets/images/security2.jpg"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 text-center center-block">
												<img src="assets/images/guarantee-90.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<p id="loading-indicator" style="display:none;">Processing...</p>
				<p id="crm-response-container" style="display:none;">Limelight messages will appear here...</p>
			</div>
		</form>
		<div id="footer1">
		<div id="footerText">&copy;<?=date("Y");?> &ndash; <?=COPYRIGHT;?></div>
			<div id="extraText">
				<a href="<?=$folder;?>legal/contact.php" class="nyroModal textLink">Contact Us</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/terms.php" class="nyroModal textLink">Terms &amp; Conditions</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/privacy.php" class="nyroModal textLink">Privacy Policy</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/returns.php" class="nyroModal textLink">Returns</a>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.nyroModal.min.js"></script>
		<script>
			$( document ).ready( function()
					{
						$( ".nyroModal" ).nyroModal();
						//--------------------inventory check-in-----------------------------//
							setTimeout( function()
									{
										$( "#Inven_ini" ).hide();
										$( "#Inven_aft" ).show();
									} ,2000 );

							$( "#kform" ).validate( {
								rules: {
									firstName: "required",
									lastName: "required",
									email: { required: true , email: true },
									phone: "required"
								},
								messages: {
									firstName: "&#x2BC5; Please enter your first name",
									lastName: "&#x2BC5; Please enter your last name",
									email: "&#x2BC5; Please enter a valid email address",
									phone: "&#x2BC5; Please enter your phone number"
								},
								errorElement: "em",
								errorPlacement: function ( error, element ) {
									error.addClass( "help-block" );
									if ( element.prop( "type" ) === "checkbox" ) {
										error.insertAfter( element.parent( "label" ) );
									} else {
										error.insertAfter( element );
									}
								},
								highlight: function ( element, errorClass, validClass ) {
									$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
								},
								unhighlight: function (element, errorClass, validClass) {
									$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
								},
								submitHandler: function(form) {
									grayOut();
									form.submit();
								}
							} );

					}
				);

function grayOut(){
	$('#LoadingDiv').show();
	setTimeout(function(){
		$('#LoadingDiv').hide();
	}, 4000);
}
		</script>
	</body>
</html>