<?php require_once( "views/_head.php" ); ?>

<link rel="stylesheet" href="<?=Flight::get( "folder" );?>css/step2.min.css">
<link rel="stylesheet" href="<?=Flight::get( "folder" );?>css/step2-mobile.min.css">

<div class="top pb-lg-5 pb-xl-0 pt-lg-5">
	<div id="selectsection" class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-8 px-xl-0">
				<h1 class="pt-3 pt-lg-0 mb-3">
					<b>Special Internet-Only Offer</b><br>on Breathe Green Charcoal Bags</h1>
					<article class="d-none d-lg-block">
						<div class="d-flex">
							<div class="pr-4">
								<img src="images/charcoal-bags.png" class="img-fluid" style="max-height:200px;">
								<p><b>More Than A Deodorizer</b> &ndash; Our air purifiers effectively deter unwanted odors, allergens, pollutants, bacteria and prevents mold/mildew.</p>
								<p><b>With Breathe Green</b> you can finally fight off the tiny mold toxins that do the real damage to your healthy air. Normally these mycotoxins can stick around long after you’ve gotten rid of the mold. These charcoal bags could very be the answer you’ve been looking for!</p>
								<ul class="list-unstyled">
									<li>Wicks &amp; Absorbs Moisture From The Air</li>
									<li>Helps Prevent Bacteria &amp; Mold Before They Spoil Your Food</li>
									<li>Aids In Your Efforts To Keep Your Car, Closet, Bathroom, Shoes, Gym Bags (and more) Fresh And Smelling Great!</li>
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
						<form action="add-to-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
							<input type="hidden" name="product" value="charcoal-bag">
							<input type="hidden" name="regularly" id="regularly" value="200.00">
							<input type="hidden" name="displayname" value="Breathe Green Charcoal Bags">
							<div class="d-flex justify-content-center align-items-center">
								<label for="package2" class="mx-2 package-label" style="font-size:1.6em">
									Buy 2<br><small>Get 1 Free</small>
									<input type="radio" name="package" value="2" id="package2">
								</label>
								<label for="package5" class="mx-1 active package-label">
									Buy 5<br><small>Get 5 Free</small>
									<input type="radio" name="package" value="5" id="package5" checked>
								</label>

								<label for="package3" class="mx-2 package-label" style="font-size:1.6em">
									Buy 3<br><small>Get 2 Free</small>
									<input type="radio" name="package" value="3" id="package3">
								</label>
							</div>
							<div class="package-selection__subscribe py-2">
								<span class="d-block package-selection__details__big-price">
									<b>$<span id="big-price"></span><small><sup> /each</sup></small></b>
								</span>
								<span class="d-block package-selection__details__subtext">
									<b>+ <span class="free-number">5</span> FREE Bag<span id="plural">s</span></b><br>
									<b>+ FREE shipping</b>
								</span>
							</div>
							<div class="package-selection__details text-center">
								<span class="d-block text-muted" style="font-size:20px">Regular Price:
									<del id="savings">$200.00</del>
								</span>
								<span class="d-block text-success" style="font-size:24px">
									<strong>You Pay <span id="you-pay">99.95</span></strong>
								</span>
							</div>
							<button type="submit" class="d-flex align-items-center justify-content-center mx-auto add-to-cart-link" onclick="fbq('track', 'AddToCart', {content_name:'Charcoal Bags'});">Add To Cart</button>
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
			<img src="images/charcoal-bags.png" alt="" class="img-fluid d-block">
		</center>
		<div class="container">
			<div class="package-selection" id="package-selection">
		<form action="add-to-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="charcoal-bag">
		<input type="hidden" name="displayname" value="Breathe Green Charcoal Bags">
		<input type="hidden" name="package" value="5">
				<div class="package-selection__best-seller">BEST SELLER</div>
				<span class="d-block package-selection__num-bottles">5 Bags + 5 FREE</span>
				<span class="d-block package-selection__savings">Regular Price: $200.00
				</span>
				<span class="d-block package-selection__price">$99.95</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					FREE SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>
			<div class="package-selection">
		<form action="add-to-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="charcoal-bag">
		<input type="hidden" name="displayname" value="Breathe Green Charcoal Bags">
		<input type="hidden" name="package" value="3">
				<span class="d-block package-selection__num-bottles">3 Bags + 2 FREE</span>
				<span class="d-block package-selection__savings">Regular Price: $120.00
				</span>
				<span class="d-block package-selection__price">$59.95</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					FREE SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>

			<div class="package-selection">
		<form action="add-to-cart?<?=$GLOBALS['qs'];?>" method="post" id="package-selection-form">
		<input type="hidden" name="product" value="charcoal-bag">
		<input type="hidden" name="displayname" value="Breathe Green Charcoal Bags">
		<input type="hidden" name="package" value="2">
				<span class="d-block package-selection__num-bottles">2 Bags + 1 FREE</span>
				<span class="d-block package-selection__savings">Regular Price: $80.00
				</span>
				<span class="d-block package-selection__price">$39.95</span>
				<span class="d-block package-selection__shipping">
					<svg height="1em" class="svg-inline--fa fa-truck fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="truck" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
						<path fill="currentColor" d="M592 0H272c-26.51 0-48 21.49-48 48v48h-44.118a48 48 0 0 0-33.941 14.059l-99.882 99.882A48 48 0 0 0 32 243.882V352h-8c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h40c0 53.019 42.981 96 96 96s96-42.981 96-96h128c0 53.019 42.981 96 96 96s96-42.981 96-96h40c13.255 0 24-10.745 24-24V48c0-26.51-21.49-48-48-48zM160 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm64-208H80v-12.118L179.882 144H224v112zm256 208c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48z"></path>
					</svg>
					FREE SHIPPING
				</span>
				<div class="line-break"></div>
				<a href="#" onclick="$(this).closest('form').submit()" class="add-to-cart-link add-to-cart-link--mobile">Add To Cart ></a>
		</form>
			</div>
		</div>

		<div class="guarantee-mobile py-3">
			<div class="container">
				<img src="images/mbg.png" alt="" class="d-block mx-auto img-fluid mb-3" width="100">
				<p>If you are not completely thrilled with your Breathe Green Charcoal Bag, we are offering you a 90-day guarantee on all purchases. Simply send the item(s) back to us for a full refund or replacement, less S&amp;H.</p>
			</div>
		</div>
	</div>
	<!-- /hidden on desktop -->

	<section class="faq my-4 py-4 d-none d-sm-block d-lg-none" id="faq">
		<div class="container">
			<div class="line-break"></div>

        <div>
          <p class="font-weight-bold faq__q">Q: "How Many Bags Do I Need For My House?"</p>
          <div>
            <p>You’ll need as many bags for as many areas that you’d like to treat. Simply place the bag in or near shoes, gym bags, luggage, suitcases, cars, bathrooms, freshly painted walls, fridges, etc. Place the Breathe Green Eco-Friendly Charcoal Bags in numerous locations such as your car, closet, bathroom or any enclosed areas in your home and office. In a smaller room you will likely use 2 bags. </p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "How Long Do They Last?"</p>
          <div>
            <p>The benefits of the charcoal will last for 2 years as long as you reactivate the bags each month. After 2 years of fresher air, simply cut open the bag and sprinkle around your garden to improve soil quality!</p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "How Do I Reactivate My Charcoal Bags To Make Sure They Are Working?"</p>
          <div>
            <p>Every month, leave the bag out to rest in the sun for an hour to "refresh" the bag, making it ready to use again!</p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "What Do These Charcoal Bags Smell Like?"</p>
          <div>
            <p>There is no smell to them.</p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "Can The Bags Be Opened Up And Used For Drinking Water Filters?"</p>
          <div>
            <p><b class="text-danger">No, do not do this.</b> The bags were not made for this purpose. This could be dangerous to your health.</p>
          </div>
        </div>

        <div>
          <p class="font-weight-bold faq__q">Q: "What Are The Bags Made From?"</p>
          <div>
            <p>Beautifully stitched linen bags containing extremely porous bamboo charcoal. For added convenience a metal grommet is embedded in the upper left corner.</p>
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
		<p><strong>Guarantee #1:</strong> <u>The Quality</u> - Breathe Green Eco-Friendly Charcoal Bags are guaranteed to contain high-quality, Activated Porous Bamboo Charcoal, in the purest form possible, scientifically proven to reduce harmful chemicals including formaldehyde, ammonia, benzene and chloroform gases emitted from such items as paint, carpeting, air fresheners, chemical cleaners, rubber and plastic.</p>
		<p><strong>Guarantee #2:</strong> <u>The Customer Comes First</u> - The entire process behind fulfillment, shipping, and the ultimate in customer support is guaranteed to be done 100% to your satisfaction, from beginning to end.</p>
		<p><strong>Guarantee #3:</strong> <u>Your Complete Satisfaction</u> - Breathe Green stands behind each of our Charcoal Bags 100%. That's why you have a full 90 days to try our air purifiers and put them to the test yourself.</p>
	</div>
	<div class="col-md-6 text-center">
		<img src="images/90day.png" class="img-fluid float-left">
		<p class="p-1"><i>If you are not completely thrilled with your Breathe Green Charcoal Bag, we are offering you a 90-day guarantee on all purchases. Simply send the item(s) back to us for a full refund or replacement, less S&amp;H.</i></p>
	</div>
</div>
</div>
</section>


</main>

<?php require_once( "views/_foot.php" ); ?>

<?php require_once( "views/_code.php" ); ?>

<script src="js/packages.js?cb=<?=rand(1111,9999);?>"></script>
<script src="js/checkout.js?cb=<?=rand(1111,9999);?>"></script>
<script>
// numBottles, price, vipPrice, days, shippingCost, savings, youpay
var two = new Package( 2, 1, 39.98, 19.99, 1, 0, 80, 39.95 );
var five = new Package( 5, 5, 99.95, 19.99, 1, 0, 200, 99.95 );
var three = new Package( 3, 2, 59.97, 19.99, 1, 0, 120, 59.95 );
</script>

</body>

</html>