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
