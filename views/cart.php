<?php require_once( "views/_head.php" ); ?>

  <main>

<?php
	render_error();
	render_notice();
	render_success();
	$_SESSION['ship599'] = false;
?>

    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-6">
          <h1 class="line-before line-before--same-height page-heading">Shopping Bag</h1>
          <p class="font-weight-bold text-uppercase underline"><?=$_SESSION['count'];?> Item(s)</p>

<?php
if( !empty( $_SESSION['cart'] ) && is_array( $_SESSION['cart'] ) )
{
foreach( $_SESSION['cart'] as $product )
	{ ?>
		<div class="cart">
			<div class="cart__item">
				<div class="row">
					<div class="col-md-5">
						<img src="images/product_<?=$product['product'];?>.png" alt="" class="cart__item__image">
					</div>
					<div class="col-md">
						<div class="cart__item__info">
							<p class="cart__item__name"><?=$product['displayname'];?></p>
							<p>
								<?php if($product['regularly']){ ?>
								<del>$<?=$product['regularly'];?></del>
								<?php } ?>
								<span class="cart__item__price text-success">$<?=$product['price'];?></span>
							</p>
							<p>Qty: <?=$product['quantity'];?></p>
								<p>
									<small><a href="remove/<?=$product['product'];?>/<?=$product['quantity'];?>" class="text-muted">
										Remove <i class="fa fa-times"></i>
									</a></small>
								</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		if( $product['product'] == "pure" ){ $_SESSION['ship599'] = true; }
	}
}
?>

        </div>

        <div class="col-lg offset-lg-1">
          
          <div class="order-summary">
            <p class="font-weight-bold text-uppercase underline">Order Summary</p>

            <div class="row">
              <div class="col">
                <p>Subtotal:</p>
              </div>
              <div class="col text-right">
                <p>$<?=$total;?></p>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <p>Shipping:</p>
              </div>
              <div class="col text-right">
								<?php
									if( $_SESSION['ship599'] )
										{ echo "<p>$5.99</p>";$total = number_format( $total + 5.99 ,2 ); }
									else
										{ echo "<p>$0.00</p>"; }
								?>
              </div>
            </div>

            <div class="row ">
              <div class="col">
                <p class="font-weight-bold text-uppercase">Order Total:</p>
              </div>
              <div class="col text-right font-weight-bold">
                <p>$<?=$total;?></p>
              </div>
            </div>
          </div>

          <a href="checkout" class="btn btn-default submit-button text-white font-weight-bold w-100 mt-3 mb-2">Proceed To Checkout</a>
			<a href="shop" class="btn btn-default submit-button text-white font-weight-bold w-100 mt-3 mb-2" style="background-color: #AFAFAF !important; color: #000;">Continue Shopping</a>
          <p class="small text-center mb-0">Breathe Green accepts all major credit cards:</p>
          <img src="images/cc-logos.png" alt="" class="img-fluid d-block mx-auto">
					<img src="images/paypal-brand.png" alt="" class="img-fluid d-block mx-auto">

        </div>
      </div>
    </div>
  </main>

<?php require_once( "views/_foot.php" ); ?>

<?php require_once( "views/_code.php" ); ?>

</body>
</html>