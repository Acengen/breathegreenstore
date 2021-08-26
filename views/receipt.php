<?php require_once( "views/_head.php" ); ?>



  <main>



<?php

	render_error();

	render_notice();

	render_success();

?>



<div class="container">

	<div class="card">

		<div class="card-body">



<?php

if( empty( $_SESSION['mainOrderId'] ) || $_SESSION['expired'] == "true" )

	{

?>

	<div class="row mb-4">

		<div class="col-lg-12 text-center">

		<h2><i class="fa fa-exclamation-circle"></i> This Receipt Has Expired</h2>

		<p><strong>Please check your email for order details.</strong></p>

		</div>

	</div>

<?php

	}

else

	{

?>



			<div class="row mb-4">

				<div class="col-lg-12 text-center">

				<h2>Congrats - Order Complete!</h2>

				<p><strong>Your Order ID: <?=$_SESSION["mainOrderId"];?></strong></p>

				<p>

					This charge will appear on your credit card statement as "<?=$_SESSION['gatewayDescriptor'];?>".<br>

					You will receive an order confirmation email from us with the subject "Thank you for your purchase".<br>

					If you do not see it in your inbox, please check your spam folder.

				</p>

				</div>

			</div>



			<div class="table-responsive-sm">

				<table class="table table-striped">

					<thead>

						<tr>

							<th>&nbsp;</th>

							<th>Item</th>

							<th class="text-center">Qty</th>

							<th class="text-right">Total</th>

						</tr>

					</thead>

					<tbody>

<?php

if( !empty( $_SESSION['cart'] ) && is_array( $_SESSION['cart'] ) )

	{

		foreach( $_SESSION['cart'] as $product )

			{

				?>

				<tr>

					<td class="center">

						<img src="images/product_<?=$product['product'];?>.png" alt="" class="img-fluid" style="max-width:80px">

					</td>

					<td><b><?=$product['displayname'];?></b></td>

					<td class="text-center">

						<?=$product['quantity'];?>

<?php

if( $product['product'] == 'charcoal-bag' || $product['product'] == 'mite-fighter' || $product['product'] == 'charcoal-inserts' )

	{

		echo "&nbsp;<sup>(+{$product['free']} FREE)</sup>";

	}

?>

					</td>

					<td class="text-right">&dollar;<?=$product['price'];?></td>

				</tr>

				<?php

			}

	}

?>

					</tbody>

				</table>

			</div>



			<div class="row">

				<div class="col-lg-4 col-sm-5">

				</div>

				<div class="col-lg-4 col-sm-5 ml-auto">

					<table class="table table-clear">

						<tbody>



<?php

if( !empty( $_SESSION['discountTotal'] ) ){

?>

<tr>

								<td class="text-right">

									<strong>Discount</strong>

								</td>

								<td class="text-right">

									<strong>&ndash;&dollar;<?=$_SESSION['discountTotal'];?></strong>

								</td>

</tr>

<?php

}

?>



							<tr>

								<td class="text-right">

									<strong>Shipping</strong>

								</td>

<?php

if( $_SESSION['has-ship'] == "yes" )

	{ echo '<td class="text-right">$5.99</td>'; }

else

	{ echo '<td class="text-right">$0.00</td>'; }

?>

							</tr>

							<tr>

								<td class="text-right">

									<strong>Total</strong>

								</td>

								<td class="text-right">

									<strong>&dollar;<?=$_SESSION['orderTotal'];?></strong>

								</td>

							</tr>

						</tbody>

					</table>

				</div>

			</div>



<?php

	}

?>



			<div class="row">

				<div class="col-lg-2 text-right">

					<img class="img-fluid" src="/images/mailicon.png" style="max-width:80px;">

				</div>

				<div class="col-lg-10">

					<h4>

						Email: <a href="mailto:support@breathegreenstore.com">support@breathegreenstore.com</a>

					</h4>

					<h4><a href="tel:18007607015">1 (800) 760-7015</a></h4>

					<p>If you have any questions about your order, please email or call us and we will get back to you within 24 hours.</p>

				</div>

			</div>





		</div>

	</div>

</div>





  </main>



<?php require_once( "views/_foot.php" ); ?>



<?php require_once( "views/_code.php" ); ?>



<?php if($_SESSION['expired']!="true"){ ?>

  <script>

    fbq('track', 'Purchase', {

      value: <?=$_SESSION['orderTotal'];?>,

      currency: 'USD',

    });

  </script>

<?php } ?>



<?php

	session_destroy();

	$_SESSION['expired'] = "true";

?>



</body>

</html>