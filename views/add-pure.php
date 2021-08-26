<?php require_once( "views/_head.php" ); ?>

<link rel="stylesheet" href="<?=Flight::get( "folder" );?>css/step2.min.css">
<link rel="stylesheet" href="<?=Flight::get( "folder" );?>css/step2-mobile.min.css">

<div class="top pb-lg-5 pb-xl-0 pt-lg-5">
	<div id="selectsection" class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-8 px-xl-0">
				<h1 class="pt-3 pt-lg-0 mb-3">
					<b>Special Internet-Only Offer</b><br>on Breathe Green PURE Air Purifiers</h1>
					<article class="d-none d-lg-block">
						<div class="d-flex">
							<div class="pr-4">
								<img src="images/plug-n-pure.png" class="img-fluid" style="max-height:200px;">
								<p><b>Live In A Purified House</b> &ndash; Our BG PURE air ionizers effectively target lingering odors, smells, and allergens that are already in your home and help prevent stale, unhealthy air and new foul odors from appearing.</p>
								<p><b>With Breathe Green PURE</b> you can finally fight off Allergies and asthma … from anything including dust, mold, smoke, mildew, bacteria, wet dog smell, cat litter and much, much more. These Air Purifiers are the answer to better smelling air in your home, office and anywhere else you may need them!</p>
								<ul class="list-unstyled">
									<li>100% Safe To Use Throughout Your House</li>
									<li>Contributes To Improved SLEEP And Overall Well-Being</li>
									<li>Within 48-72 Hours, You Can Already Begin To See A Real Difference!</li>
								</ul>
							</div>
						</div>
					</article>
			</div>
			<div class="col-lg-5 col-xl-4 d-none d-lg-block px-xl-0">
				<div class="package-selection pb-3">
					<div class="package-selection__heading text-center">
						<h3 class="my-0 text-uppercase">
							<b>Choose Your Package</b>
						</h3>
						<p class="lead my-0">Select one of the options</p>
					</div>
					<div class="package-selection__caret-down"></div>
					<div class="package-selection__options">
						<form action="add-pure-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
							<input type="hidden" name="product" value="pure">
							<input type="hidden" name="regularly" id="regularly" value="281.97">
							<input type="hidden" name="displayname" value="Breathe Green PURE">
							<div class="d-flex justify-content-center align-items-center">
								<label for="package1" class="mx-1 package-label" style="height:auto">
									Buy<br>1
									<input type="radio" name="package" value="1" id="package1">
								</label>
								<label for="package2" class="mx-1 package-label" style="height:auto">
									Buy<br>2
									<input type="radio" name="package" value="2" id="package2">
								</label>
								<label for="package3" class="mx-1 active package-label" style="height:auto">
									Buy<br>3
									<input type="radio" name="package" value="3" id="package3" checked>
								</label>
								<label for="package4" class="mx-1 package-label" style="height:auto">
									Buy<br>4
									<input type="radio" name="package" value="4" id="package4">
								</label>
								<label for="package5" class="mx-1 package-label" style="height:auto">
									Buy<br>5
									<input type="radio" name="package" value="5" id="package5">
								</label>
							</div>
							<div class="package-selection__subscribe pt-2 pb-0 mb-0">
								<span class="d-block package-selection__details__big-price">
									<b>$<span id="big-price"></span><small><sup> /each</sup></small></b>
								</span>
<div class="text-center" style="font-size:1.75em;color:#FF9;background:#040;">&nbsp;<b id="percentage">40%</b> OFF&nbsp;</div>
							</div>
							<div class="package-selection__details text-center">
								<span class="d-block text-success" style="font-size:24px">
									<strong>You Pay <span id="you-pay">99.95</span></strong>
								</span>
							</div>
							<button type="submit" class="d-flex align-items-center justify-content-center mx-auto add-to-cart-link" onclick="fbq('track', 'AddToCart', {content_name:'PURE'});">Add To Cart</button>
							<p class="text-center mb-0 mt-3" style="font-size: 20px;">
								<img src="images/truck.png" alt="" class="mr-2">
								<span id="shipping-cost"></span> SHIPPING</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<main>
	<!-- hidden on desktop -->
	<div class="d-block d-lg-none">
		<center>
			<img src="images/plug-n-pure.png" alt="" class="img-fluid d-block">
		</center>
		<div class="container">
			<div class="package-selection" id="package-selection">
		<form action="add-pure-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="pure">
		<input type="hidden" name="package" value="5">
		<input type="hidden" name="displayname" value="Breathe Green PURE">
				<div class="package-selection__best-seller">BEST SELLER</div>
				<span class="d-block package-selection__num-bottles">5 Units</span>
				<span class="d-block package-selection__savings">55% OFF
				</span>
				<span class="d-block package-selection__price">$209.99</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					$5.99 SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>
			<div class="package-selection">
		<form action="add-pure-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="pure">
		<input type="hidden" name="package" value="4">
		<input type="hidden" name="displayname" value="Breathe Green PURE">
				<span class="d-block package-selection__num-bottles">4 Units</span>
				<span class="d-block package-selection__savings">52% OFF
				</span>
				<span class="d-block package-selection__price">$179.99</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					$5.99 SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>
			<div class="package-selection">
		<form action="add-pure-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="pure">
		<input type="hidden" name="package" value="3">
		<input type="hidden" name="displayname" value="Breathe Green PURE">
				<span class="d-block package-selection__num-bottles">3 Units</span>
				<span class="d-block package-selection__savings">50% OFF
				</span>
				<span class="d-block package-selection__price">$139.99</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					$5.99 SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>
			<div class="package-selection">
		<form action="add-pure-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="pure">
		<input type="hidden" name="package" value="2">
		<input type="hidden" name="displayname" value="Breathe Green PURE">
				<span class="d-block package-selection__num-bottles">2 Units</span>
				<span class="d-block package-selection__savings">45% OFF
				</span>
				<span class="d-block package-selection__price">$102.99</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					$5.99 SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>
			<div class="package-selection">
		<form action="add-pure-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="pure">
		<input type="hidden" name="package" value="1">
		<input type="hidden" name="displayname" value="Breathe Green PURE">
				<span class="d-block package-selection__num-bottles">1 Unit</span>
				<span class="d-block package-selection__savings">40% OFF
				</span>
				<span class="d-block package-selection__price">$55.99</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					$5.99 SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>

		</div>

		<div class="guarantee-mobile py-3">
			<div class="container">
				<img src="images/60mbg.png" alt="" class="d-block mx-auto img-fluid mb-3" width="100">
				<p>If you are not completely thrilled with your Breathe Green PURE, we are offering you a 60-day guarantee on all purchases. Simply send the item(s) back to us for a full refund or replacement, less S&amp;H.</p>
			</div>
		</div>
	</div>
	<!-- /hidden on desktop -->

	<section class="faq my-4 py-4 d-none d-sm-block d-lg-none" id="faq">
		<div class="container">
			<div class="line-break"></div>

        <div>
          <p class="font-weight-bold faq__q">Q: "How Many Breathe Green Purifiers Do I Need For My House?"</p>
          <div>
            <p>You’ll need as many purifiers for as many areas that you’d like to treat. Simply plug in the PURE air ionizers into a standard outlet in one or multiple rooms. Whether it’s your office, bedrooms, living room, kitchen, playrooms, hallways, garage, basement and anywhere else you suspect you might be affected by questionable air quality just plug them in and forget about it - No need to replace expensive filters. Many customers want to be sure the air at their workplace is fresh and then also start out with their bedroom and kitchen. But depending on your situation you can start with more, or less.</p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "How Many Come In One Box?"</p>
          <div>
            <p>One Breathe Green PURE comes in a box. You can order up to 5 or more at a time.</p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "How Do These PURE Oxygen Activators Actually Work?"</p>
          <div>
<p>It’s all about science. Our planet is charged with negative ions and these clean the air. Simply plug the Breathe Green PURE Air Purifier into an electrical socket. Your Breathe Green PURE then “pumps” negative ions into your home. The negative ions scrub the air clean and remove odor and dander molecules from the air. </p>

<p>This air purifier is good for you AND the environment. It produces ZERO pollution, consumes low energy, and is made with ABS material which makes it strong, shock resistant, and sleek. It doesn’t require filters and has no maintenance cost!</p>

          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "Can These Air Purifiers Really Help Me Sleep Better?"</p>
          <div>
            <p>Studies have shown that negative ions have other amazing health benefits including fighting free radicals, revitalizing cell metabolism, stronger immune function, purifying the blood, balancing the autonomic nervous system, promoting deep sleep and healthy digestion.</p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "What Are The Product Specifications?"</p>
          <div>
<br>
<ul>
<li>Power: ≤1W</li>
<li>Current: 21mA</li>
<li>LED brightness: 10 ~ 20 Lux at night</li>
<li>Anion production: 8×106 pcs/cm3</li>
</ul>
          </div>
        </div>

			</div>

		</div>
	</section>

	<div class="d-block d-lg-none">
		<div class="container py-3">
			<h1 class="text-dark">Choose Your Package</h1>
			<a href="#package-selection" class="add-to-cart-link add-to-cart-link--mobile position-relative add-to-cart-link--normal mx-auto d-block w-100">Add To Cart ></a>
		</div>
	</div>

<hr>

<section>
<div class="container">
<div class="row">
	<div class="col-md-6 gartext">
		<p><strong>Guarantee #1:</strong> <u>The Quality</u> - Breathe Green Eco-Friendly PURE Air Purifiers are guaranteed to produce the negative ions (anions) that can help naturally freshen the air molecules in your home or office, instead of just covering up the odors with chemicals and aerosols. Scientifically shown to reduce common dust and other living organisms like bacteria, pollutants, allergens and odors from the air for better breathing.</p>
		<p><strong>Guarantee #2:</strong> <u>The Customer Comes First</u> - The entire process behind fulfillment, shipping, and the ultimate in customer support is guaranteed to be done 100% to your satisfaction, from beginning to end.</p>
		<p><strong>Guarantee #3:</strong> <u>Your Complete Satisfaction</u> - Breathe Green stands behind each of our PURE Air Purifiers 100%. That's why you have a full 60 days to try our PURE oxygen activators and put them to the test yourself.</p>
	</div>
	<div class="col-md-6 text-center">
		<img src="images/60mbg.png" class="img-fluid float-left">
		<p class="p-1"><i>If you are not completely thrilled with your Breathe Green PURE, we are offering you a 60-day guarantee on all purchases. Simply send the item(s) back to us for a full refund or replacement, less S&amp;H.</i></p>
	</div>
</div>
</div>
</section>


</main>

<?php require_once( "views/_foot.php" ); ?>

<?php require_once( "views/_code.php" ); ?>

<script src="js/packages-pure.js?cb=<?=rand(1111,9999);?>"></script>
<script src="js/checkout.js?cb=<?=rand(1111,9999);?>"></script>
<script>
// numBottles, price, vipPrice, days, shippingCost, savings, youpay
var one = new Package( 1, 55.99, 55.99, 1, 5.99, 40, 55.99 );
var two = new Package( 2, 51.49, 51.49, 1, 5.99, 45, 51.49 );
var three = new Package( 3, 46.66, 46.66, 1, 5.99, 50, 46.66 );
var four = new Package( 4, 45.00, 45.00, 1, 5.99, 52, 45.00 );
var five = new Package( 5, 42.00, 42.00, 1, 5.99, 55, 42.00 );
</script>

</body>

</html>