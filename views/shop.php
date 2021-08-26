<?php require_once( "views/_head.php" ); ?>

  <main class="main--home">


    <div class="jumbotron jumbotron--shop text-center" style="background:#2e5b01;">
      <img src="images/shop-header.jpg" alt="" class="img-fluid">
    </div>


    <section>
      <div class="container">

        <div class="shop-heading">
          <h1 class="shop-title">Breathe Green Products</h1>
          <p class="shop-subtitle">Satisfaction guaranteed</p>
        </div>

        <div class="row">
          <div class="col-lg shop-item">
            <a href="<?=Flight::get( "folder" );?>charcoal-bags"><img src="images/product_charcoal-bag.png" alt=""
                class="img-fluid d-block mx-auto">
              <div class="products-carousel__product-info">
                <h1 class="products-carousel__product-name">Charcoal Bags</h1>
                <p class="products-carousel__product-description">Odor Remover &amp; Purifier</p>
              </div>
            </a>
            <div class="text-center">
              <a href="<?=Flight::get( "folder" );?>charcoal-bags"
                class="submit-button submit-button--inverse d-inline-block font-weight-bold px-5 mt-auto">Learn More</a>
            </div>
          </div>
<?php /* INSERTS OUT FOR NOW
          <div class="col-lg shop-item">
            <a href="<?=Flight::get( "folder" );?>charcoal-inserts"><img src="images/product_charcoal-inserts.png" alt=""
                class="img-fluid d-block mx-auto">
              <div class="products-carousel__product-info">
                <h1 class="products-carousel__product-name">Charcoal Inserts</h1>
                <p class="products-carousel__product-description">Purifying in Smaller Spaces</p>
              </div>
            </a>
            <div class="text-center">
              <a href="<?=Flight::get( "folder" );?>charcoal-inserts"
                class="submit-button submit-button--inverse d-inline-block font-weight-bold px-5 mt-auto">Learn More</a>
            </div>
          </div>
*/ ?>
          <div class="col-lg shop-item">
            <a href="<?=Flight::get( "folder" );?>mite-fighter"><img src="images/product_mite-fighter.png" alt="" class="img-fluid d-block mx-auto">
              <div class="products-carousel__product-info">
                <h1 class="products-carousel__product-name">Mite Fighter</h1>
                <p class="products-carousel__product-description">Dust Mite Eliminator</p>
              </div>
            </a>
            <div class="text-center">
              <a href="<?=Flight::get( "folder" );?>mite-fighter"
                class="submit-button submit-button--inverse d-inline-block font-weight-bold px-5 mt-auto">Learn More</a>
            </div>
          </div>

          <div class="col-lg shop-item">
            <a href="<?=Flight::get( "folder" );?>pure">
              <img src="images/product_pure.png" alt="" class="img-fluid d-block mx-auto">
              <div class="products-carousel__product-info">
                <h1 class="products-carousel__product-name">PURE</h1>
                <p class="products-carousel__product-description">Natural Air Ionizer</p>
              </div>
            </a>
            <div class="text-center">
              <a href="<?=Flight::get( "folder" );?>pure"
                class="submit-button submit-button--inverse d-inline-block font-weight-bold px-5 mt-auto">Learn More</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /container -->
    </section>

  </main>
	
<?php require_once( "views/_foot.php" ); ?>

<?php require_once( "views/_code.php" ); ?>

<script>
	var mySwiper = new Swiper( "#products-carousel",
		{
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