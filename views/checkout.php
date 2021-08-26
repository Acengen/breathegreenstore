<?php require_once( "views/_head.php" ); ?>
<link rel="stylesheet" href="<?=$folder;?>css/checkout.min.css">
<link rel="stylesheet" href="<?=$folder;?>css/checkout-mobile.min.css">

<main>

<?php
	render_error();
	render_notice();
	render_success();
	$shipping = false;
?>

<div class="container">
		<div class="row">
			<div class="col-lg-8 order-2 order-lg-1">

					<!-- hidden on mobile -->
					<div class="d-none d-lg-block mb-3">
						<div class="alert alert-success text-center">
							<i class="fa fa-lock"></i> Your information is secured by 256-bit encryption.
						</div>
					</div>
					<!-- /hidden on mobile -->

				<form action="process" id="form" method="POST" class="needs-validation" novalidate>
					<input type="hidden" id="couponcode" name="couponcode" value="">
					<input type="hidden" id="token" name="token" value="<?=$_SESSION['token'];?>">
					<div class="row">
						<div class="col-12">
							<fieldset class="no-bg">

									<legend>Shipping address</legend>
								
								<div class="form-group row">
									<label for="firstName" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										First name:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="firstName" id="firstName" class="form-control" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> First name is required.
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="lastName" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Last name:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="lastName" id="lastName" class="form-control" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> Last name is required.
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="email" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Email:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="email" id="email" class="form-control" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> Required for digital receipt.
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Phone:
									</label>
									<div class="col-lg-9 col-12">
										<input type="tel" name="phone" id="phone" class="form-control" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> Required for billing validation.
										</div>
									</div>
								</div>


<div class="cconly" style="display:none">
								<div class="form-group row">
									<label for="shippingCountry" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Country:
									</label>
									<div class="col-lg-9 col-12">
										<select name="shippingCountry" id="shippingCountry" class="form-control ccreq" required>
											<option value="US" id="US">United States</option>
											<option value="CA" id="CA">Canada</option>
										</select>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="shippingAddress1" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Address:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="shippingAddress1" id="shippingAddress1" class="form-control ccreq" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> Required for shipping.
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="shippingAddress2" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Address Line 2:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="shippingAddress2" id="shippingAddress2" class="form-control">
									</div>
								</div>
								
								<div class="form-group row">
									<label for="shippingCity" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										City:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="shippingCity" id="shippingCity" class="form-control ccreq" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> Required for shipping.
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="shippingState" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										State:
									</label>
									<div class="col-lg-9 col-12">
										<select name="shippingState" id="shippingState" class="form-control ccreq" required>
											<option value="" selected="" disabled=""></option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
										<select name="shippingStateCA" id="shippingStateCA" class="form-control" style="display:none">
											<option value="" selected="" disabled=""></option>
											<option value="AB">Alberta</option>
											<option value="BC">British Columbia</option>
											<option value="MB">Manitoba</option>
											<option value="NB">New Brunswick</option>
											<option value="NL">Newfoundland and Labrador</option>
											<option value="NT">Northwest Territories</option>
											<option value="NS">Nova Scotia</option>
											<option value="NU">Nunavut</option>
											<option value="ON">Ontario</option>
											<option value="PE">Prince Edward Island</option>
											<option value="QC">Quebec</option>
											<option value="SK">Saskatchewan</option>
											<option value="YT">Yukon</option>
										</select>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="shippingZip" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Zip:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="shippingZip" id="shippingZip" class="form-control ccreq" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> Required for shipping.
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-lg-3 d-none d-lg-block"></div>
									<div class="col-lg-9 col-12">
										<div class="form-check">
											<input type="checkbox" id="shippingDifferent" name="shippingDifferent" value="1" id="show-billing-info" class="form-check-input">
											<label for="shippingDifferent" class="form-check-label">
												Check this box if your shipping address is different from your billing address
											</label>
										</div>
									</div>
								</div>
</div>

								
							</fieldset>
						</div>
						<!-- /column -->

						<!-- column -->
						<div class="col-12">
							<fieldset id="billing-info" style="display: none;">

								<legend>Billing address</legend>
								
								<div class="form-group row">
									<label for="billingCountry" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Country:
									</label>
									<div class="col-lg-9 col-12">
										<select name="billingCountry" id="billingCountry" class="form-control billadd">
											<option value="US">United States</option>
											<option value="CA">Canada</option>
										</select>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="billingAddress1" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Address:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="billingAddress1" id="billingAddress1" class="form-control billadd">
									</div>
								</div>
								
								<div class="form-group row">
									<label for="billingAddress2" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Address Line 2:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="billingAddress2" id="billingAddress2" class="form-control">
									</div>
								</div>
								
								<div class="form-group row">
									<label for="billingCity" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										City:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="billingCity" id="billingCity" class="form-control billadd">
									</div>
								</div>
								
								<div class="form-group row">
									<label for="billingState" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										State:
									</label>
									<div class="col-lg-9 col-12">
										<select name="billingState" id="billingState" class="form-control billadd">
											<option value="" selected="" disabled=""></option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
										<select name="billingStateCA" id="billingStateCA" class="form-control" style="display:none">
											<option value="" selected="" disabled=""></option>
											<option value="AB">Alberta</option>
											<option value="BC">British Columbia</option>
											<option value="MB">Manitoba</option>
											<option value="NB">New Brunswick</option>
											<option value="NL">Newfoundland and Labrador</option>
											<option value="NT">Northwest Territories</option>
											<option value="NS">Nova Scotia</option>
											<option value="NU">Nunavut</option>
											<option value="ON">Ontario</option>
											<option value="PE">Prince Edward Island</option>
											<option value="QC">Quebec</option>
											<option value="SK">Saskatchewan</option>
											<option value="YT">Yukon</option>
										</select>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="billingZip" class="col-lg-3 col-12 col-form-label text-lg-right text-capitalize">
										Zip:
									</label>
									<div class="col-lg-9 col-12">
										<input type="text" name="billingZip" id="billingZip" class="form-control billadd">
									</div>
								</div>
								
							</fieldset>
						</div>
						<!-- /column -->

						<hr class="fieldset-divider">


								<legend>Payment Information</legend>


<div class="col-12">
	<fieldset>
	<label for="cctype-cc" style="font-weight:bold"><input id="cctype-cc" type="radio" name="paytype" data-paymentmethod="credit_card" class="payment_radio" value="creditcard"> <img src="images/cc-logo.png"> Pay with Credit Card</label><br>
	<label for="pay_with_paypal" style="font-weight:bold"><input id="pay_with_paypal" type="radio" name="paytype" data-paymentmethod="paypal" class="payment_radio" value="paypal"> <img src="images/paypal.png"> Pay with PayPal<sup>&reg;</sup></label>
	</fieldset>
<br>
</div>


<!-- CREDITCARD -->
						<!-- column -->
						<div class="col-12" id="ccform" style="display:none">
							<fieldset class="payment-method">
								
								<!-- row -->
								<div class="row">
									<!-- column -->

									<div class="col-lg-9 col-xl-8 col-10 offset-1 offset-lg-0 mobile-bg">

										<!-- hidden on mobile -->
										<div class="form-tab"></div>
										<!-- /hidden on mobile -->
								
										<div class="form-group row">
											<label for="ccNumber" class="col-lg-5 col-12 col-form-label text-lg-right text-capitalize">
												Card number:
											</label>
											<div class="col-lg-7 col-12">
												<input type="tel" name="ccNumber" id="ccNumber" class="form-control ccreq" maxlength="16" required>
										<div class="invalid-feedback">
											<i class="fa fa-exclamation-circle"></i> Required for billing.
										</div>
											</div>
										</div>
								
										<div class="form-group row">
											<label for="" class="col-lg-5 col-12 col-form-label text-lg-right text-capitalize">Expiration date:</label>
											<div class="col-lg-4 col-12">
												<select name="ccMonth" id="" class="form-control ccreq" required>
													<option value="" selected="" disabled=""></option>
													<option value="01">01 January</option>
													<option value="02">02 February</option>
													<option value="03">03 March</option>
													<option value="04">04 April</option>
													<option value="05">05 May</option>
													<option value="06">06 June</option>
													<option value="07">07 July</option>
													<option value="08">08 August</option>
													<option value="09">09 September</option>
													<option value="10">10 October</option>
													<option value="11">11 November</option>
													<option value="12">12 December</option>
												</select>
											</div>

											<!-- hidden on desktop -->
											<div class="col-12 d-block d-lg-none">
												<span>/</span>
											</div>
											<!-- /hidden on desktop -->

											<div class="col-lg-3 col-12">
												<select name="ccYear" id="" class="form-control ccreq" required>
													<option value="" selected="" disabled=""></option>
													<option value="18">2018</option>
													<option value="19">2019</option>
													<option value="20">2020</option>
													<option value="21">2021</option>
													<option value="22">2022</option>
													<option value="23">2023</option>
													<option value="24">2024</option>
													<option value="25">2025</option>
													<option value="26">2026</option>
													<option value="27">2027</option>
													<option value="28">2028</option>
													<option value="29">2029</option>
													<option value="30">2030</option>
													<option value="31">2031</option>
												</select>
											</div>
										</div>
								
										<div class="form-group row">
											<label for="CVV" class="col-lg-5 col-12 col-form-label text-lg-right text-capitalize">
												<i class="fa fa-question-circle" alt="Credit Card Verification Code" title="Credit Card Verification Code" data-toggle="modal" data-target="#cvvModal" style="cursor:pointer"></i> CVV:
											</label>
											<div class="col-lg-7 col-12">
												<input type="tel" name="CVV" id="CVV" class="form-control ccreq" maxlength="4" required>
												<div class="invalid-feedback">
													<i class="fa fa-exclamation-circle"></i> Required for card validation.
												</div>
											</div>
										</div>
									</div>

<div class="modal fade" id="cvvModal" tabindex="-1" role="dialog" aria-labelledby="cvvModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cvvModalLabel">Credit Card Verification Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="../images/cvv-finder.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

									<div class="col-lg-3 col-xl-4 d-none d-lg-block border-left border-dark">
										<div class="accepted-credit-cards text-center">
											<p style="font-size: 0.8em;">
												<i>We accept all major credit cards &amp; payments through PayPal:</i>
											</p>
												<img src="images/cc-logos.png" alt="" class="img-fluid">
												<img src="images/paypal-brand.png" alt="" class="img-fluid">
											<img src="images/guarantee-seal.png" class="img-fluid" style="max-height:100px;">
											<img src="images/ssl-logo.png" class="img-fluid" style="max-height:100px;">
										</div>
										<div class="clear"></div>
									</div>
								</div>
								
							</fieldset>
						</div>
<!-- /CREDITCARD -->

<!-- PAYPAL -->
						<!-- column -->
						<div class="col-12" id="ppform" style="display:none">
							<fieldset class="payment-method">
								<div class="accepted-credit-cards text-center">
									<img src="images/paypal-logo.png" alt="" class="img-fluid"> 
								</div>
								<div class="clear"></div>
							</fieldset>
						</div>
<!-- /PAYPAL -->

						<hr class="fieldset-divider">

						<div class="col-12 order-first order-lg-last orderbutton" style="display:none">
							<fieldset class="no-bg">

								<!-- hidden on mobile -->
								<div class="totals-bottom border border-dark d-none d-lg-block">
									<button type="submit" class="place-order-button place-order-button--bottom">
										<i class="fa fa-check-circle"></i> Place Your Order
									</button>
								</div>
							</fieldset>
						</div>

					</div>

					<!-- hidden on desktop -->
					<div class="d-block d-lg-none my-3 orderbutton" style="display:none">
						<button type="submit" class="place-order-button">
							<i class="fa fa-check-circle"></i> Place Your Order
						</button>
						<div class="my-4 text-center">
								<img src="images/mbg.png" class="img-fluid" style="max-height:100px;">
						</div>
					</div>
					<!-- /hidden on desktop -->
					
				</form>
			</div>


			<div class="col-lg-4 order-1 order-lg-2 mb-3 mb-lg-0">

				<div class="order-summary border border-dark" id="order-summary">
					<!-- hidden on mobile -->
					<h1 class="d-none d-lg-block">Order Summary</h1>
					<!-- /hidden on mobile -->

					<!-- hidden on desktop -->
					<div class="d-block d-lg-none mb-3">
						<div class="alert alert-success text-center">
							<i class="fa fa-lock"></i> Your information is secured by 256-bit encryption.
						</div>
					</div>
					<!-- /hidden on desktop -->


						<div>
<table style="width:100%">
<tbody>


<?php
if( !empty( $_SESSION['cart'] ) && is_array( $_SESSION['cart'] ) )
{
foreach( $_SESSION['cart'] as $product )
	{
		?>


				<tr>
<td><small><sup><a href="clear/<?=$product['product'];?>/<?=$product['quantity'];?>" class="text-danger"><i class="fa fa-times" title="Remove" alt="Remove"></i></a></sup></small></td>
					<td>
						<?=substr($product['displayname'],14);?> <span class="text-monospace">x<?=$product['quantity'];?></span>
					</td>
					<td class="text-right text-monospace">
						$<?=$product['price'];?>
					</td>
				</tr>


		<?php
	}
}
?>


									<tr id="discounted" style="display:none">
<td>&nbsp;</td>
										<td>Discount&nbsp;<small>(<span id="percentage"></span>)</small>:</td>
										<td id="discountvalue" class="text-right text-monospace"></td>
									</tr>


									<tr class="border-bottom text-muted">
<td>&nbsp;</td>
										<td>Shipping &amp; Handling:</td>

<?php
if( $_SESSION['ship599'] )
	{ echo '<td class="text-right text-monospace">$5.99</td>';$total = number_format( $total + 5.99 ,2 ); }
else
	{ echo '<td class="text-right text-monospace">$0.00</td>'; }
?>
									</tr>
									<tr style="font-weight:900;">
<td>&nbsp;</td>
										<td>Order&nbsp;Total:</td>
										<td class="text-right text-monospace" id="ordertotal">$<?=$total;?></td>
									</tr>

</tbody>
</table>
						</div>


				</div>

<p id="couponapplied" style="display:none" class="alert alert-success text-center mt-1">
	<small><b>
		<i class="fa fa-check-circle"></i> Your coupon has been applied!
	</b></small>
</p>

<p id="couponblock" class="text-right mt-1">
	<small><a href="#" id="opencoupon" class="btn btn-sm btn-secondary"><i class="fa fa-money-bill-wave"></i> Have a coupon?</a></small>
</p>
<div id="couponinput" class="form-group row mt-1" style="display:none">
	<div class="col-12">
		<input type="text" name="coupon" id="coupon" class="form-control text-center text-uppercase" placeholder="COUPON CODE" max-length="16" style="width:100%;border:2px solid #080;border-radius:6px;background:#EFE;">
		<a href="#" id="applycoupon" class="btn btn-block btn-sm btn-success mt-1"><i class="fa fa-mouse-pointer"></i> Apply Coupon</a>
		<p id="invalidcoupon" class="alert alert-warning text-center mt-2" style="display:none"><small><i class="fa fa-exclamation-circle"></i> Sorry, that coupon is not valid.</small></p>
	</div>
</div>


			</div>
		</div>
	</div>

</main>

<?php require_once( "views/_foot.php" ); ?>
<?php require_once( "views/_code.php" ); ?>

<script src="js/form-validation.js"></script>

<script>
$( document ).ready( function()
  {
    fbq('track', 'InitiateCheckout', {contents:'Step 1'});
  }
);

$("#opencoupon").click( function()
  {
		event.preventDefault();
		$("#couponblock").hide();
		$("#couponinput").show();
	});
$("#shippingCountry").change( function()
	{
		if( $( "#shippingCountry" ).val() == "US" )
			{
				$( "#shippingStateCA" ).hide();
				$( "#shippingStateCA" ).removeAttr( "required" );			
				$( "#shippingState" ).show();
				$( "#shippingState" ).prop( "required", true );
			}
		else
			{
				$( "#shippingState" ).hide();
				$( "#shippingState" ).removeAttr( "required" );			
				$( "#shippingStateCA" ).show();
				$( "#shippingStateCA" ).prop( "required", true );
			}
	});

$("#billingCountry").change(function()
	{
		if( $( "#billingCountry" ).val() == "US" )
			{
				$( "#billingStateCA" ).hide();
				$( "#billingStateCA" ).removeAttr( "required" );			
				$( "#billingState" ).show();
				$( "#billingState" ).prop( "required", true );
			}
		else
			{
				$( "#billingState" ).hide();
				$( "#billingState" ).removeAttr( "required" );			
				$( "#billingStateCA" ).show();
				$( "#billingStateCA" ).prop( "required", true );
			}
	});

$("#shippingDifferent").change(function()
	{
		if( $( "#shippingDifferent" ).is( ':checked' ) )
			{
				$( "#billing-info" ).show();
				$( ".billadd" ).prop( "required", true );
			}
		else
			{
				$("#billing-info").hide();
				$( ".billadd" ).removeAttr( "required" );
			}
	});

$( ".payment_radio" ).on( "click", function()
	{
		$( ".orderbutton" ).show();
		var paytype = $( '.payment_radio:checked' ).data( 'paymentmethod' );
		if( paytype == "credit_card" )
			{
				$( "#ppform" ).hide();
				$( "#ccform" ).show();
				$( ".cconly" ).show();
				$( ".ccreq" ).prop( "required", true );
			}
		else
			{
				$( "#ppform" ).show();
				$( "#ccform" ).hide();
				$( ".cconly" ).hide();
				$( ".ccreq" ).removeAttr( "required" );			
			}
	});

$("#applycoupon").click( function()
  {
		event.preventDefault();
    $.ajax(
      {
        type: "POST",
        url: '/coupon',
				datatype: 'json',
        data:
          {
            coupon: $('#coupon').val(),
            //total: $('#total').val(),
            //discount: $('#discount').val()
          },
        success: function(data)
          {
          if ( data.okay == 'okay' )
            {
							if( data.discount != "NONE" )
								{
									$("#couponcode").val( $('#coupon').val() );
									$("#couponblock").hide();
									$("#couponinput").hide();
									$("#couponapplied").slideDown();
									$("#percentage").html( data.discount + "%" );
									$("#discountvalue").html( "-$" + data.disval );
									$("#discounted").show();
									$("#ordertotal").html( "$" + data.newtot );
								}
							else
								{
									$("#invalidcoupon").slideDown();
								}
            }
          },
        error: function(data)
          {
						$("#invalidcoupon").slideDown();
          }
      });
  });
</script>

</body>
</html>