<?php require_once( "views/_head.php" ); ?>

<?php

count_cart();

?>

<!doctype html>

<html lang="en">

<head>

  <title>Breathe Green</title>

  <meta charset="utf-8">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">

	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

	<link rel="manifest" href="/site.webmanifest">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="<?=Flight::get( "folder" );?>css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">

	<link rel="stylesheet" href="<?=Flight::get( "folder" );?>css/all.css">

  <link rel="stylesheet" href="<?=Flight::get( "folder" );?>css/styles.min.css">

	<!-- Google Tag Manager -->

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

	})(window,document,'script','dataLayer','GTM-5HPK777');</script>

	<!-- End Google Tag Manager -->

	<!-- Facebook Pixel Code -->

		<script>

			!function(f,b,e,v,n,t,s)

			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

			n.callMethod.apply(n,arguments):n.queue.push(arguments)};

			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

			n.queue=[];t=b.createElement(e);t.async=!0;

			t.src=v;s=b.getElementsByTagName(e)[0];

			s.parentNode.insertBefore(t,s)}(window, document,'script',

			'https://connect.facebook.net/en_US/fbevents.js');

			fbq('init', '792375541186909');

			fbq('track', 'PageView');

		</script>

	<!-- End Facebook Pixel Code -->

</head>

<body>

	<!-- Facebook Pixel Code -->

		<noscript><img height="1" width="1" style="display:none"

			src="https://www.facebook.com/tr?id=792375541186909&ev=PageView&noscript=1"

		/></noscript>

	<!-- End Facebook Pixel Code -->

	<!-- Google Tag Manager (noscript) -->

		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HPK777" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->

  <nav class="navbar navbar-expand-lg navbar-light bg-white">

    <div class="container">

      <a class="navbar-brand" href="<?=Flight::get( "folder" );?>"><img src="images/logo1a.png" alt=""></a>

      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"

        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavId">

        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">

          <li class="nav-item">

            <a href="<?=Flight::get( "folder" );?>" class="nav-link">Home</a>

          </li>

          <li class="nav-item dropdown">

            <a href="<?=Flight::get( "folder" );?>shop" class="nav-link dropdown-toggle" id="shopDropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>

            <div class="dropdown-menu"  aria-labelledby="shopDropdown">

              <a href="<?=Flight::get( "folder" );?>charcoal-bags" class="dropdown-item">

								Charcoal Bags

							</a>

<?php /*

              <a href="<?=Flight::get( "folder" );?>charcoal-inserts" class="dropdown-item">

								Charcoal Inserts

							</a>

*/ ?>

              <a href="<?=Flight::get( "folder" );?>mite-fighter" class="dropdown-item">

								Mite Fighter

							</a>

              <a href="<?=Flight::get( "folder" );?>pure" class="dropdown-item">

								PURE

							</a>

            </div>

          </li>

          <li class="nav-item">

            <a href="<?=Flight::get( "folder" );?>about" class="nav-link">About Us</a>

          </li>

          <li class="nav-item">

            <a href="<?=Flight::get( "folder" );?>articles" class="nav-link">Articles</a>

          </li>

          <li class="nav-item">

            <a href="<?=Flight::get( "folder" );?>careers" class="nav-link">Careers</a>

          </li>

          <li class="nav-item">

            <a href="<?=Flight::get( "folder" );?>contact" class="nav-link">Contact Us</a>

          </li>

<li class="nav-item"><a href="tel:18007607015" class="nav-link">1(800)760-7015</a></li>

        </ul>

        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

          <li class="nav-item">

            <a class="nav-link nav-link--cart" href="<?=Flight::get( "folder" );?>cart"><span class="badge"><i class="fa fa-shopping-cart"></i> Cart</span> <span class="badge badge-pill badge-success"><?=$_SESSION['quantity'];?></span>

            </a>

          </li>

        </ul>

      </div>

    </div>

  </nav>



  <main class="main--home">



<div class="p-4 mb-4" style="background:url('images/bg.jpg');

  background-repeat: no-repeat;

  background-size: cover;">

<div class="container">

    <div class="bd-example p-4 text-light">

<h2 class="font-lightest-green"><strong>The Breathe Green Mission</strong></h2>



<p>We passionately research and produce the finest quality eco-friendly products to help ensure a happier and healthier YOU!</p>



<p>Our team of researchers and production experts are working around the clock to create the safest and most environmentally friendly breakthrough solutions to help you and your family live a healthier and SAFER life.</p>



<p>We feel privileged to serve you, our valued customer. Rest assured, we provide you with the same eco-friendly solutions we provide to our own family and friends. We look forward to hearing about the positive impact our widely-researched selection of unique products has on your health and well being!</p>

    </div>

</div>

</div>



    <div class="intro">



<?php

	render_error();

?>



      <div class="container">

        <div class="between-lines text-center mb-4">

          <h1 class="title mb-0">Our Featured</h1>

          <h2 class="subtitle mb-0"><span class="font-weight-bold">Best-Selling</span> <span

              class="font-green">Products</span></h2>

        </div>

      </div>

    </div>



    <section class="featured-products">

      <div class="container">

        <div class="row products-carousel-wrapper">

          <div class="col d-flex align-items-center pr-0">

            <img src="images/carat_left.png" alt="" class="img-fluid d-block mx-auto" id="product-carousel-left"

              style="cursor: pointer;">

          </div>



          <div class="col-10 px-sm-0">

            <!-- Slider main container -->

            <div class="swiper-container mt-5" id="products-carousel">

              <!-- Additional required wrapper -->

              <div class="swiper-wrapper">

                <!-- Slides -->

                <div class="swiper-slide">

                  <a href="charcoal-bags"><img src="images/product_charcoal-bag.png" alt=""

                      class="img-fluid d-block mx-auto">

                    <div class="products-carousel__product-info">

                      <h1 class="products-carousel__product-name">Charcoal Bag</h1>

                      <p class="products-carousel__product-description">Odor Remover &amp; Air Purifier</p>

                    </div>

                  </a>

                </div>

                <div class="swiper-slide">

                  <a href="mite-fighter"><img src="images/product_mite-fighter.png" alt=""

                      class="img-fluid d-block mx-auto">

                    <div class="products-carousel__product-info">

                      <h1 class="products-carousel__product-name">Mite Fighter</h1>

                      <p class="products-carousel__product-description">Dust Mite Eliminator</p>

                    </div>

                  </a>

                </div>

                <div class="swiper-slide">

                  <a href="pure"><img src="images/product_pure.png" alt=""

                      class="img-fluid d-block mx-auto">

                    <div class="products-carousel__product-info">

                      <h1 class="products-carousel__product-name">PURE</h1>

                      <p class="products-carousel__product-description">Natural Air Ionizer</p>

                    </div>

                  </a>

                </div>

<?php /*

                <div class="swiper-slide">

                  <a href="charcoal-inserts"><img src="images/product_charcoal-inserts.png" alt=""

                      class="img-fluid d-block mx-auto">

                    <div class="products-carousel__product-info">

                      <h1 class="products-carousel__product-name">Charcoal Inserts</h1>

                      <p class="products-carousel__product-description">Purifying in Smaller Spaces</p>

                    </div>

                  </a>

                </div>

*/ ?>

              </div>



            </div>

            <!-- /products-carousel -->

          </div>

          <!-- /column -->



          <div class="col d-flex align-items-center pl-0">

            <img src="images/carat_right.png" alt="" class="img-fluid d-block mx-auto" id="product-carousel-right"

              style="cursor: pointer;">

          </div>

          <!-- /column -->

        </div>

        <!-- /row -->

      </div>

    </section>







<?php

/* STATIC PRODUCTS

      <div class="container">

        <div class="row products-carousel-wrapper">





            <!-- Slider main container -->

            <div class="swiper-container mt-5" id="products-carousel">

              <!-- Additional required wrapper -->

              <div class="swiper-wrapper">

                <!-- Slides -->



                  <a href="physio-omega.php"><img src="images/product_charcoal-bag.png" alt=""

                      class="img-fluid d-block mx-auto">

                    <div class="products-carousel__product-info">

                      <h1 class="products-carousel__product-name">Charcoal Bag</h1>

                      <p class="products-carousel__product-description">Ultra-Pure DPA/DHA/EPA</p>

                    </div>

                  </a>



                  <a href="physio-fit.php"><img src="images/product_mite-fighter.png" alt=""

                      class="img-fluid d-block mx-auto">

                    <div class="products-carousel__product-info">

                      <h1 class="products-carousel__product-name">Mite Fighter</h1>

                      <p class="products-carousel__product-description">Natural Fat Loss Helper</p>

                    </div>

                  </a>



              </div>



            </div>

            <!-- /products-carousel -->





          <!-- /column -->

        </div>

        <!-- /row -->

      </div>

*/

?>

    </section>











<?php /* EMAIL OUT

    <section class="mailing-list-banner green-gradient-background">

      <div class="container">

        <div class="row">

          <div class="col-lg-10 offset-lg-1">

            <h1 class="page-heading page-heading--small line-before line-before--teal text-white">Want To Stay Up To

              Date With The Latest Health Breakthroughs, Special Promotions, And Other Useful Info?</h1>

            <p class="p-after-heading text-white">Join our free mailing list today and we'll keep in touch!</p>



            <form action="lead.php" method="post" class="mt-5">

              <div class="row">

                <div class="col-md-7 d-flex align-items-center">

                  <div class="form-group w-100 mb-md-0">

                    <input type="email" name="email" class="form-control" style="max-width: 568px; height: 51px; border-radius: 0;"

                      placeholder="Enter your email address">

                  </div>

                </div>

                <div class="col-md-auto d-flex align-items-center">

                  <div class="form-group w-100 mb-0">

                    <button type="submit" class="btn btn-default submit-button font-weight-bold text-white px-5">Sign

                      Up Now</button>

                  </div>

                </div>

              </div>

            </form>

          </div>

        </div>

      </div>

    </section>

*/ ?>



    <section class="pt-5">

      <div class="container">

        <div class="triptych">

          <div class="row">

            <div class="col-lg pr-lg-0 d-flex align-items-center">

              <img src="images/woman-hugging-man_grayscale.jpg" alt="" class="w-100 triptych__left">

            </div>



            <div class="col-lg-6 guarantee">

              <div class="text-center">

                <center><img src="images/60days.png" style="max-width: 90%;"></center><br>

                <p class="text-center">If you are not completely thrilled with your Breathe Green order and the amazing difference it makes in your life, simply contact our customer support team for a prompt and courteous refund.</p>

              </div>

            </div>



            <div class="col-lg pl-lg-0 d-flex align-items-center">

              <img src="images/dancing-couple_grayscale.jpg" alt="" class="w-100 triptych__right">

            </div>

          </div>

        </div>

      </div>

    </section>

  </main>



<?php require_once( "views/_foot.php" ); ?>



<?php require_once( "views/_code.php" ); ?>



<script>

	var mySwiper = new Swiper( "#products-carousel",

		{

			autoplay: {

				delay: 3000,

			},

			loop: true,

			navigation:

				{

					nextEl: '.swiper-button-next',

					prevEl: '.swiper-button-prev',

				},

			slidesPerView: 3,

			spaceBetween: 26,

			breakpoints:

				{

					991: { slidesPerView: 2 },

					767: { slidesPerView: 1 }

				}

		});

	$( "#product-carousel-left" ).on( "click" , function()

		{

			mySwiper.slidePrev();

		});

	$( "#product-carousel-right" ).on( "click" , function()

		{

			mySwiper.slideNext();

		})

</script>



</body>

</html>