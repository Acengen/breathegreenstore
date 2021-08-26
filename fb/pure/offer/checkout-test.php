<?php
	require_once( "inc/_setup.php" );
	unset( $_SESSION["upsells"] );
	unset( $_SESSION["extraproduct"] );
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
		<link type="text/css" href="assets/css/style-checkout.css" rel="stylesheet">
		<link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="assets/css/checkout_now_beta.css" rel="stylesheet">
		<?php require_once( "pixels/_all.php" ); ?>
		<?php require_once( "pixels/_prospect.php" ); ?>

<style type="text/css">
.radio input[type=radio]
	{
		cursor:pointer;
		margin-left:-20px;
	}
label.radio
	{
		cursor:pointer;
		padding: 20px;
		padding-left: 30px !important;
		padding-right: 14px !important;
	}
.offerBox {
  padding: 0 !important;
}
label {
  padding: 10px 0 !important;
}

@media (max-width: 480px){
#best {
    width: 30px;
}
}
</style>

	</head>
	<body>
		<?php require_once( "pixels/_all_body.php" ); ?>
<div id="LoadingDiv" style="display:none;">
	Please wait&hellip;
	<img src="assets/images/_loading.gif" class="displayed" alt="" />
</div>
<?php
	if( !empty( $_SESSION["errorMessage"] ) )
		{
			echo '<div class="errormessage">'.$_SESSION["errorMessage"].'</div>';
			unset( $_SESSION["errorMessage"] );
		}
?>
<div id="header1">
       <div id="checkoutSection" class="header-cont">
            <div id="inner1">
            <img src="assets/images/logo-check.png" style="width: 230px; height: 104px;">

        </div>
        <div class="natural">
            <h2 style="font-size: 20px; line-height: 26px; font-weight: bold;padding: 0 50px;"> "Breathe deeper, live better and feel refreshed with Breathe Green PURE Air Ionizers!"</h2>
                    </div>
			  <div class="about-container">
         <a class="button-look" onclick="javascript:openNewWindow('contact.php','modal')" style="cursor:pointer">
            <span>Call 24/7: <?=SUPPORT_PHONE;?></span>
            </a></div>
       </div>
      
    </div>
<div id="section2">
	<div id="checkoutSection" style="max-width:1000px;">
        <div id="inner2">
                <img src="assets/images/product111b.png" width="100%">
        </div>
         <div class="five-stars">
            <div class="sec_img">
            <img src="assets/images/five-stars.jpg" width="100%">
            <p class="saving" id="Inven_ini" style="display: none;">Inventory Checking<span>.</span><span>.</span><span>.</span></p>
            <p style="" id="Inven_aft">Inventory check... <img src="assets/images/right.jpg" style="vertical-align: bottom; width: 20px;    display: inline-block;"></p>
        </div>
            <div class="sec_img sec_img_last">
            <img src="assets/images/trusted-store.jpg" width="100%">
            </div>
            <div class="clear"></div>    
        </div>
		</div>
    </div>
		<form id="kform" class="kform" method="post" action="<?=$folder;?>inc/_process.php<?=$carry;?>" name="downsell_form1" accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8" novalidate="novalidate">
			<input type="hidden" name="product_id" id="product_id" value="<?=$product[1]["id"];?>">
			<input type="hidden" name="product_price" id="product_price" value="<?=$product[1]["price"];?>">
			<input type="hidden" name="product_rate" id="product_rate" value="1">
			<input type="hidden" name="innerButton1_click" id="innerButton1_click" value="0">
			<input type="hidden" name="innerButton2_click" id="innerButton2_click" value="0">
			<div id="checkoutSection">
				<div id="checkoutLeft">
					<div id="leftText1">
						<span style="font-weight: bold; font-size: 16px; color: #e14242;">YOUR <span id="thesavings">50</span>% DISCOUNT HAS BEEN APPROVED</span>
						<br>
						<span style="font-weight: bold; font-size: 15px; color: #e14242;">(NOW ONLY $<span id="retail">139.99</span> Retail)</span>
						<br>
					</div>
					<div id="leftText2"> STEP 2: SELECT ORDER QUANTITY </div>
					<br>







<div class="row">
<div class="col-sm-12">



<?php
	foreach( $products as $product )
		{
			$priceeach = number_format($product["price"]/$product["quantity"],2);
			$priceeach = round( $priceeach + 0.01 ) - 0.01;

			if( $product["ship_price"] == 0 )
				{ $shipping = "FREE"; }
			else
				{ $shipping = CURRENCY . number_format($product["ship_price"],2); }

      if( $product['savingpercent'] == 50 )
				{ $checked = ' checked="checked"'; }

			?>
			<div class="offerBox">

<div class="kform_productBox">
<input type="radio" name="product" value="<?=$product["id"];?>" class="kform_productSelect radioinput" data-price="<?=$product["price"];?>" id="product<?=$product["id"];?>" data-perunit="<?=$priceeach;?>" data-sper="<?=$product['savingpercent'];?>" data-crossed="<?=$product['crossedout'];?>"<?=$checked;?>>
  <label for="product<?=$product["id"];?>" class="itemLabel name<?=$product["id"];?>" style="font-weight:normal">
    <?=$product["name"];?> &ndash; <span id="disper<?=$product["id"];?>"><?=$product['savingpercent'];?></span>% OFF
  </label>
				<?php if( $product['savingpercent'] == 50 ){ ?>
          <img src="assets/images/best_value.png" id="best" style="vertical-align: middle;">
				<?php } ?>
<div class="productValue perunit1"><?=CURRENCY;?><span id="buy<?=$product["id"];?>"><?=$priceeach;?></span>/unit</div>
<div style="clear:both"></div>
</div>


			</div>
			<?php
			$first = "";
			$checked = "";
		}
?>



<div class="text-right">
    <span class="estimateTxt">*Estimated total with tax &amp; shipping <a style="cursor:pointer;" id="myBtn">(?)</a></span>
</div>
</div>
</div>







					<div id="leftText4"> STEP 3: SHIPPING INFORMATION </div>
					<div class="kform_spacer"> 
						<input type="text" id="firstName" name="firstName" value="<?=$_SESSION[ "firstName" ];?>" placeholder="First Name">
					</div>
					<div class="kform_spacer">
						<input type="text" id="lastName" name="lastName" value="<?=$_SESSION[ "lastName" ];?>" placeholder="Last Name">
					</div>
					<div class="kform_spacer">
						<input type="email" id="email" name="email" value="<?=$_SESSION[ "email" ];?>" placeholder="Email Address">
					</div>
					<div class="kform_spacer">
						<input type="tel" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, &#39;&#39;);" id="phone" name="phone" placeholder="Phone" value="<?=$_SESSION[ "phone" ];?>" maxlength="10">
					</div>
					<div class="kform_spacer">
						<select style="width:100%;" id="shippingCountry" name="shippingCountry">
							<option value="US">United States</option>
							<option value="CA">Canada</option>
						</select>
					</div>
					<div class="kform_spacer">
						<input type="text" id="shippingAddress1" name="shippingAddress1" placeholder="Your Address1">
					</div>
					<div class="kform_spacer">
						<input type="text" id="shippingAddress2" name="shippingAddress2" placeholder="Your Address2">
					</div>
					<div class="kform_spacer">
						<input type="text" id="shippingCity" name="shippingCity" placeholder="Your City">
					</div>
					<div class="kform_spacer ab">
						<select id="shippingState" name="shippingState" type="text">
							<?php include( "inc/_states.php"); ?>
						</select>
						<select id="shippingProvince" name="shippingProvince" type="text" style="display:none">
							<?php include( "inc/_provinces.php" ); ?>
						</select>
					</div>
					<div class="kform_spacer">
						<input type="text" id="shippingZip" name="shippingZip" placeholder="Zip Code"  maxlength="7">
					</div>
					<div id="formfields">
						<div class="kform_spacer kform_checkbox" style="display: none">
							<input type="radio" name="billingSameAsShipping" value="yes" checked="checked"> YES
							<input type="radio" name="billingSameAsShipping" value="no"> No
						</div>
						<div class="kform_spacer kform_checkbox">
							<input name="billShipSame" id="address_differs_check" type="checkbox" checked="">
							<label for="address_differs_check"> Billing Address Same as Shipping </label>
						</div>
						<div id="kform_hiddenAddress" class="billing-info" style="display: none">
							<div id="rightText2"> BILLING INFORMATION </div>
							<div class="kform_spacer">
								<select id="billingCountry" name="billingCountry">
									<option value="US">United States</option>
									<option value="CA">Canada</option>
								</select>
							</div>
							<div class="kform_spacer">
								<input type="text" id="billingAddress1" name="billingAddress1" placeholder="Billing Address1">
							</div>
							<div class="kform_spacer">
								<input type="text" id="billingAddress2" name="billingAddress2" placeholder="Billing Address2">
							</div>
							<div class="kform_spacer">
								<input type="text" id="billingCity" name="billingCity" placeholder="Billing City">
							</div>
							<div class="kform_spacer">
							<select id="billingState" name="billingState" type="text">
								<?php include( "inc/_states.php"); ?>
							</select>
							<select id="billingProvince" name="billingProvince" type="text" style="display:none">
								<?php include( "inc/_provinces.php" ); ?>
							</select>
							</div>
							<div class="kform_spacer">
								<input type="text" id="billingZip" name="billingZip" placeholder="Billing Zip Code" maxlength="7">
							</div>
						</div>
						<br>
					</div>
				</div>
				<div id="checkoutRight">
					<div class="payment-types-inner">
						<div style="font-size:18px;text-align: center;font-weight:bold;padding-bottom:20px;">
							<strong>Payment Information</strong>
						</div>
						<label for="pay_with_paypal">
							<table class="paypal-table">
								<tbody>
									<tr>
										<td>
											<input id="pay_with_paypal" type="radio" name="paytype" data-paymentmethod="paypal" class="payment_radio" value="paypal">
										</td>
										<td class="pp-border"><img src="assets/images/paypal-logo-de.png"></td>
										<td><img src="assets/images/paypal-cc-de.png"></td>
									</tr>
								</tbody>
							</table>
							<p style="display: none;" class="paypal-downarrow-area">Please Scroll Down to Checkout with Paypal <img class="paypal-downarrow" src="assets/images/paypal-downarrow.gif"> </p>
						</label>
						<hr class="shipping-line">
						<label for="cctype-cc">
							<table class="cc-table">
								<tbody>
									<tr>
										<td>
											<input id="cctype-cc" type="radio" name="paytype" data-paymentmethod="credit_card" class="payment_radio" value="creditcard" checked="checked">
										</td>
										<td><img src="assets/images/cc-logo-de.png"></td>
										<td><img src="assets/images/cc-visamasteramex.png"></td>
									</tr>
								</tbody>
							</table>
						</label>
						<hr class="shipping-line">
					</div>
					<div id="kform_paySourceCard">
						<div class="kform_spacer">
							Credit Card Information:
						</div>
						<div class="kform_spacer">
							<input type="tel" name="creditCardNumber" placeholder="Credit Card Number"  maxlength="16">
						</div>
						<div class="kform_spacer">
							<input type="tel" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, &#39;&#39;);" name="CVV"  placeholder="CVV" maxlength="3">
						</div>
						<div class="kform_spacer" style="text-align:right">
							<label for="cardMonth" style="width:30%;text-align:middle;"> Expiration: </label>
							<select style="width:30%" id="ccMonth" name="ccMonth">
								<?php include( "inc/_months.php" ); ?>
							</select>
							<select style="width:30%" id="ccYear" name="ccYear">
								<?php include( "inc/_years.php" ); ?>
							</select>
						</div>
					</div>
					<div id="rightText3">
						<div class="pullLeft"> Item </div>
						<div class="pullRight"> Amount </div>
						<div class="clear"></div>
					</div>
					<div id="rightText4">
						<div class="pullLeft"><span id="clonedName"><?=$products[3]["name"];?></span>
						</div>
						<div class="pullRight">
							<table class="kcartTotals">
								<tbody>
									<tr>
										<td class="kcartSubTotal"><?=CURRENCY;?><span class="subtotal"><?=$products[3]["price"];?></span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					<br>
					<div>
						<div class="pullLeft"> Shipping
						</div>
						<div class="pullRight">
							<table class="kcartTotals">
								<tbody>
									<tr>
										<td class="kcartSubTotal"><?=CURRENCY;?><span class="subtotal2"><?=number_format($products[3]["ship_price"],2);?></span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					<div id="rightText6">
						<div class="pullLeft">
							<b>Grand Total:</b>
						</div>
						<div class="pullRight">
							<table class="kcartTotals">
								<tbody>
									<tr>
										<td class="kcartGrandTotal"><?=CURRENCY;?><span class="gtotal"><?=number_format($products[3]["price"]+$products[3]["ship_price"],2);?></span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					<div style="width: 100%; height: auto; margin: 0 auto;">
						<img src="assets/images/guarantee-new.jpg" width="100%">
					</div>
					<div class="col-sm-12 funnel-box-main" style="margin:0 auto;float:none;">
						<div data-name="lifetime-warranty" class="funnel-box">
							<div data-display-name="Lifetime Warranty" class="lifetime-warranty">
								<div class="header">
									<label for="funnel-lifetime-warranty"><img src="assets/images/red-arrow.857f0fc25e8c1a67.png" class="bounce-right">
									</label>
									<input type="checkbox" id="extraproduct" name="extraproduct">
									<label for="funnel-lifetime-warranty" class="expship">YES, I Want a 1-Year Protection and Replacement Warranty!</label>
								</div>
								<div class="body"> <strong>One Time Offer:</strong> By placing your order today, you can have a 1-Year Protection and Replacement Warranty for only an additional <span class="warranty-price" id="warranty-price">$9.97!</span></div>
							</div>
						</div>
						<div class="funnel-box" style="text-align:center; margin-top:0; margin-bottom:20px;border-top: none;">
							<img src="assets/images/warranty.png" class="">
						</div>
					</div>
<a style="display:block; cursor: pointer; line-height: 100%;" class="btn-grn"><input type="submit" value="YES! Send Me My Breathe Green PURE!" class="kform_submitBtn" id="kformSubmit">
                <input type="submit" value="" style="display: none;" class="paypal-btn" id="kformSubmit">
				</a>
					<div style="width: 100%; height: auto; margin: 0 auto;">
						<img class="secure-score" src="assets/images/secure-score.jpg">
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</form>
		<p id="loading-indicator" style="display:none;">Processing...</p>
		<p id="crm-response-container" style="display:none;">Limelight messages will appear here...</p>
		<div id="footer1">
			<div id="footerText">&copy;<?=date("Y");?> &ndash; <?=COPYRIGHT;?></div>
			<div id="extraText">
			<a href="<?=$folder;?>legal/contact.php" class="nyroModal textLink">Contact Us</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/terms.php" class="nyroModal textLink">Terms &amp; Conditions</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/privacy.php" class="nyroModal textLink">Privacy Policy</a>&nbsp;&nbsp;&nbsp; 
				<a href="<?=$folder;?>legal/returns.php" class="nyroModal textLink">Returns</a>
			</div>
		</div>
		<div id="leaveFade" style="display: none;">
			<div id="leavePop1" style="display: block;">
				<div id="leaveX1">
					<img src="assets/images/xclose.png" width="100%">
				</div>
				<div id="innerA1" class="innerStyling"> WAIT! </div>
				<div id="innerB1" class="innerStyling"> Save an extra 10% OFF on top of the 50% discount with this free coupon! </div>
				<div id="innerButton1"> Activate 10% OFF Coupon! </div>
			</div>
			<div id="leavePop2">
				<div id="leaveX2">
					<img src="assets/images/xclose.png" width="100%">
				</div>
				<div id="innerA2" class="innerStyling"> WAIT! Here is our BEST &amp; FINAL OFFER! </div>
				<div id="innerB2" class="innerStyling"> Save an <span style="text-decoration: underline; color: #c00;">EXTRA 5% OFF (15% OFF TOTAL)</span> on top of the 50% Discount with this FREE COUPON! </div>
				<div id="innerButton2"> Activate 15% OFF Coupon! </div>
			</div>
		</div>



    <div id="myModal" class="modal" style="display: none;">
        <div class="modal-content">
        <div id="loader" style="display: none;">    
        <img src="assets/images/loader-box.gif">
        </div>    
        <span class="close">×</span>
        <div class="map-container">
            <img src="assets/images/map.png" class="map-img">
            <p>Tax and shipping is calculated based on your Location,<br>
            enter your location below to calculate your tax and<br>
            shipping:</p>
            <div class="zipSec" id="zipSec" style="display:block;">
                <div name="zipform" style="position: relative;"> 
                    <input type="text" class="zipField" placeholder="Zip Code or Postal Code" name="stateZip" required maxlength="7">
                    <div id="error_msg" style="font-size: 12px; color: red; text-align: center; margin: 7px 0px 0px 0px; display: none;"></div>
                    <input type="button" class="subBtn" id="subBtn" value="calculate" name="">
                </div> 
            </div>
            <div class="zipSecBelow" id="zipSecBelow" style="display: none;">
                <p class="pInfo">Based on your information your rates are:</p>
                <div class="zipResult">
                    <table>
                        <tbody>
                           <tr>
                            <td>Subtotal:</td>
                            <td>$<span id="subtotal" class="subtotal2">139.99</span></td>
                        </tr>
                        <tr>
                            <td>Shipping Cost:</td>
                            <td>$<span id="shipping_cost" class="subtotal1">5.99</span></td>
                        </tr>
                      
                        <tr>
                            <td>Order Total:</td>
                            <td><span id="order_total" class="subtotal">$145.98</span></td>
                        </tr>
                    </tbody></table>
                    <input type="button" id="reset_zip" value="Reset">
                </div>
                <p class="pCondtn">*prices are not confirmed until checkout</p>
            </div>
        </div>

        </div>
    </div>

		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.nyroModal.min.js"></script>
		<script>
$(document).ready(function() {

<?php
	foreach( $products as $product )
		{
			$priceeach = number_format($product["price"]/$product["quantity"],2);
			$priceeach = round( $priceeach + 0.01 ) - 0.01;
			?>
			$('#product<?=$product["id"];?>').click(function() {
					$('#clonedName').html("<?=$product["name"];?>");
					$("#product_price").val(<?=$product["price"];?>);
					$("#quantity").val(<?=$product["quantity"];?>);
					$(".subtotal2").text("<?=number_format($product["ship_price"],2);?>");
					if($("#innerButton1_click").val() == 1){
						$(".subtotal").text("<?=$product["10off"];?>");
						$("#retail").text("<?=$product["10off"];?>");
						<?php $gototal = number_format($product["10off"]+$product["ship_price"],2); ?>
						$(".gtotal").text("<?=$gototal;?>");
					}else if($("#innerButton2_click").val() == 1){
						$(".subtotal").text("<?=$product["15off"];?>");
						$("#retail").text("<?=$product["15off"];?>");
						<?php $gototal = number_format($product["15off"]+$product["ship_price"],2); ?>
						$(".gtotal").text("<?=$gototal;?>");
					}else{
						$(".subtotal").text("<?=$product["price"];?>");
						$("#retail").text("<?=$product["price"];?>");
						<?php $gototal = number_format($product["price"]+$product["ship_price"],2); ?>
						$(".gtotal").text("<?=$gototal;?>");
					}
					$("#perunit").html(<?=$priceeach;?>);
					product_selection(); 
			});
			<?php
		}
?>

var discountTimes = 1;
var fl=0;
<?php if( $_GET["exit"] == "n" ){ echo 'fl=1;'; } ?>

if(fl == 0)
	{
		$(document).on('mouseleave', leaveFromTop);
	}

function leaveFromTop(e) {
		if (e.clientY < 0) {
				if (discountTimes == 1) {
						$('#leaveFade, #leavePop1').show();
				} else if (discountTimes == 2) {
						$('#leaveFade, #leavePop2').show();
						$('#leavePop1').remove();
				} else {
						$('#leaveFade').remove();
				}
		}
}

/* start mobile exit-pop-up */
function leaveFromTop1(e) {
				if (discountTimes == 1) {
						$('#leaveFade, #leavePop1').show();
				} else if (discountTimes == 2) {
						$('#leaveFade, #leavePop2').show();
						$('#leavePop1').remove();
				} else {
						$('#leaveFade').remove();
				}
}
/* end mobile exit */

if(fl == 0)
{
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				$(document).ready(function() {
						window.history.pushState(null, "", window.location.href);        
						window.onpopstate = function() {
								leaveFromTop1();
								window.history.pushState(null, "", window.location.href);
						};
				});
		}
}

$('#leaveX1, #leaveX2').click(function() {
		$('#leaveFade').fadeOut();
		setTimeout(function() {
				$('#leaveFade').hide();
		}, 700);
		discountTimes = 0;
});

$('#innerButton1').click(function() {
		var sbtotal = $(".subtotal").html();
		var shipping1 = parseFloat($(".subtotal2").text());
		var original = $('#product_price').val();
		var percent = 0.10;
		$(".gtotal").text((parseFloat(original)-((parseFloat(original)*percent).toFixed(2))+shipping1).toFixed(2));
		$(".subtotal").text((parseFloat(original)-((parseFloat(original)*percent).toFixed(2))).toFixed(2));
		$("#retail").text((parseFloat(original)-((parseFloat(original)*percent).toFixed(2))).toFixed(2));
<?php
	foreach( $products as $product )
		{
			$priceeach = number_format($product["10off"] / $product["quantity"], 2);
			$stitch = '$("#perunit").html("'.$priceeach.'");';
			$stitch .= "\r\n";
			$stitch .= '$("#thesavings").html("'.$product['savingpercent'].'");';
			$stitch .= "\r\n";
      $stitch .= '$("#buy'.$product["id"].'").html("'.$priceeach.'");';
			$stitch .= "\r\n";
			$stitch .= '$("#disper'.$product['id'].'").html("'.$product['plus10'].'");';
			$stitch .= "\r\n";
			$stitch .= '$( "#product'.$product['id'].'" ).data( "sper", '.$product['plus10'].' );';
			$stitch .= "\r\n";
			echo $stitch;
		}
?>
	$("#innerButton1_click").val(1);
	$(".priceGroup2, #firstDiscount").css("display", "block");
	$(".priceGroup1").css("display", "none");
	$("#leftText2").html('STEP 2: SELECT ORDER QUANTITY&nbsp;&nbsp;&nbsp;<span style="color:#090;font-size:1.3em;"><b>✓ Extra <span id="howmuchoff">10</span>% OFF!</b></span>');
	$('#leaveFade').fadeOut();
	setTimeout( function()
    {
			$('#leaveFade').hide();
    }, 700);
	discountTimes = 2;
	product_selection(); 
});
									
$('#innerButton2').click(function() {
		var sbtotal = $(".subtotal").html();
		var original = $('#product_price').val();
		var shipping15 = parseFloat($(".subtotal2").text());
		var percent = 0.15;
		$(".subtotal").text((parseFloat(original)-((parseFloat(original)*percent).toFixed(2))).toFixed(2));
		$(".gtotal").text((parseFloat(original)-((parseFloat(original)*percent).toFixed(2))+shipping15).toFixed(2));
		$("#retail").text((parseFloat(original)-((parseFloat(original)*percent).toFixed(2))).toFixed(2));
<?php
	foreach( $products as $product )
		{
			$priceeach = number_format($product["15off"] / $product["quantity"], 2);
			$stitch = '$("#perunit").html("'.$priceeach.'");';
			$stitch .= "\r\n";
			$stitch .= '$("#thesavings").html("'.$product['savingpercent'].'");';
			$stitch .= "\r\n";
      $stitch .= '$("#buy'.$product["id"].'").html("'.$priceeach.'");';
			$stitch .= "\r\n";
			$stitch .= '$("#disper'.$product['id'].'").html("'.$product['plus15'].'");';
			$stitch .= "\r\n";
			$stitch .= '$( "#product'.$product['id'].'" ).data( "sper", '.$product['plus15'].' );';
			$stitch .= "\r\n";
			echo $stitch;
		}
?>
	$("#innerButton1_click").val(0);
	$("#innerButton2_click").val(1);
	$(".priceGroup3, #secondDiscount").css("display", "block");
	$(".priceGroup2, #firstDiscount").css("display", "none");
	$("#leftText2").html('STEP 2: SELECT ORDER QUANTITY&nbsp;&nbsp;&nbsp;<span style="color:#090;font-size:1.3em;"><b>✓ Extra <span id="howmuchoff">15</span>% OFF!</b></span>');
	$('#leaveFade').fadeOut();
	setTimeout(function() {
		$('#leaveFade').hide();
	}, 700);
	$('#product9').click();
	discountTimes = 0;
	product_selection();
});

$("#address_differs_check").change(function() {
	if($("#address_differs_check").is(':checked')) {
		$("#kform_hiddenAddress").slideUp();
	} else {
		$("#kform_hiddenAddress").slideDown();
	}
});

$(".nyroModal").nyroModal();

$(window).scroll(function() {
	if($(window).scrollTop() > 340 && $(window).scrollTop() < 1400) {
		$('#stickyTop').show();
	} else {
		$('#stickyTop').hide();
	}
});

setTimeout(function() {
	$("#inven_ini").hide();
	$("#inven_aft").show();
}, 2000);

product_selection();

$("#kform").validate({
	rules: {
		firstName: "required",
		lastName: "required",
		email: {
			required: true,
			email: true
		},
		shippingAddress1: "required",
		shippingCity: "required",
		shippingZip: "required",
		shippingCountry: "required",
		phone: "required",
		ccMonth: "required",
		ccYear: "required",
		creditCardNumber: "required",
		CVV: "required",
		billingAddress1: {
			required: "#address_differs_check:not(:checked)"
		},
		billingCity: {
			required: "#address_differs_check:not(:checked)"
		},
		billingZip: {
			required: "#address_differs_check:not(:checked)"
		}
	},
	messages: {
		firstName: "&#x2BC5; Please enter your first name",
		lastName: "&#x2BC5; Please enter your last name",
		email: "&#x2BC5; Please enter a valid email address",
		shippingAddress1: "&#x2BC5; Please enter your street address",
		shippingCity: "&#x2BC5; Please enter your city",
		shippingState: "&#x2BC5; Please enter your state",
		shippingZip: "&#x2BC5; Please enter your zip",
		billingAddress1: "&#x2BC5; Please enter your street address",
		billingCity: "&#x2BC5; Please enter your city",
		billingZip: "&#x2BC5; Please enter your zip",
		shippingCountry: "&#x2BC5; Please select your country",
		phone: "&#x2BC5; Please enter your phone number",
		ccMonth: "&#x2BC5; Please enter your credit card expiration month",
		ccYear: "&#x2BC5; Please enter your credit card expiration year",
		creditCardNumber: "&#x2BC5; Please enter your credit card number",
		CVV: "&#x2BC5; Please enter your credit card verification code"
	},
	errorElement: "em",
	errorPlacement: function(error, element) {
		error.addClass("help-block");

		if(element.prop("type") === "checkbox") {
			error.insertAfter(element.parent("label"));
		} else {
			error.insertAfter(element);
		}
	},
	highlight: function(element, errorClass, validClass) {
		$(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
	},
	unhighlight: function(element, errorClass, validClass) {
		$(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
	},
	submitHandler: function(form) {
		grayOut();
		form.submit();
	}
});

});

$( "select[name='shippingCountry']" ).change( function(){
	product_selection();
});

$(document).off( 'change' , 'input[type=radio][name=paytype]' );

$(document).on( 'change' , 'input[type=radio][name=paytype]' , function(){
	product_selection(); 
});

function product_selection()
	{
		var section_pay = $( '.payment_radio:checked' ).data( 'paymentmethod' );
		var productid = $( '.radioinput:checked' ).val();
		var productprice = $( '.radioinput:checked' ).data( 'price' );
		var perunit = $( '.radioinput:checked' ).data( 'perunit' );
		var savepercent = $( '.radioinput:checked' ).data( 'sper' );
		var crossed = $( '.radioinput:checked' ).data( 'crossed' );
		$('#product_price').val( productprice );
		$("#product_id").val( productid );
		$("#perunit").html( perunit );
		$("#thesavings").html( savepercent );
		$("#crossedout").html( crossed );
		$("#thesubprice").html( productprice );
		var exitpop1 = $("#innerButton1_click").val();
		var exitpop2 = $("#innerButton2_click").val();
		if( exitpop1 == 1 )
			{ $("#product_rate").val(2); }
		else if( exitpop2 == 1 )
			{ $("#product_rate").val(3); }
		else
			{ $("#product_rate").val(1); }
		if ( section_pay == 'paypal' )
			{
				$("#kform").attr( "action" , "<?=$folder;?>inc/_paypal.php<?=$carry;?>" );
				$('#kform_paySourceCard').hide();
				$('select[name=creditCardType]').val('paypal').trigger('change');
				$('.kform_submitBtn').hide();
				$('.paypal-btn').show();
				$('.paypal-downarrow-area').show();
			}
		else if( section_pay == "credit_card" )
			{
				$("#kform").attr( "action" , "<?=$folder;?>inc/_process.php<?=$carry;?>" );
				$('.paypal-downarrow-area').hide();
				$('#kform_paySourceCard').show();
					$('.kform_submitBtn').show();
					$('.paypal-btn').hide();
				var cntry = $( "#shippingCountry" ).val();
				if( cntry == "US" )
					{
						$( "#shippingState" ).show();
						$( "#shippingProvince" ).hide();
					}
				else if( cntry == "CA" )
					{
						$( "#shippingProvince" ).show();
						$( "#shippingState" ).hide();
					}
				var bcntry = $( "#billingCountry" ).val();
				if( bcntry == "US" )
					{
						$( "#billingState" ).show();
						$( "#billingProvince" ).hide();
					}
				else if( bcntry == "CA" )
					{
						$( "#billingProvince" ).show();
						$( "#billingState" ).hide();
					}
			}
	}

function grayOut(){
	$('#LoadingDiv').show();
	setTimeout(function(){
		$('#LoadingDiv').hide();
	}, 4000);
}
		</script>

<script type="text/javascript">
$( document ).ready(function() {

	$("#myBtn").click(function(){
		$("#myModal").attr("style","display:block");
		$("#zipSec").attr("style","display:block");
		$("#zipSecBelow").attr("style","display:none");
	});

	$("#subBtn").click(function(){
		$("#zipSec").attr("style","display:none");
		$("#zipSecBelow").attr("style","display:block");
	});

	$("#reset_zip").click(function(){
		$("#zipSec").attr("style","display:block");
		$("#zipSecBelow").attr("style","display:none");
	});

	$(".close").click(function(){
		$("#myModal").attr("style","display:none");
	});


});
</script>

	</body>
</html>