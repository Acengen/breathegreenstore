<?php
/*
foreach ($_REQUEST as $key => $value)
    $message .= "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
*/

//mail('don@donelliston.com', 'breathegreenecopost', $message);

/*
Field COL$B is Breathe Green Charcoal Bag - 1 Unit<br>Field COL$P is 1<br>Field COL$O is 0<br>Field COL$N is 0<br>Field COL$M is 0<br>Field COL$L is 0<br>Field COL$K is 0<br>Field COL$J is 1<br>Field COL$I is  $ 0.85 <br>Field COL$H is 2178<br>Field COL$G is Breathe Green <br>Field COL$F is Breathe Green<br>Field COL$E is Nu Lifestyle Marketing<br>Field COL$D is 1<br>Field COL$C is Charcoal Bags<br>Field id is 362<br>Field COL$A is BGCB-01<br>Field row is 362<br>
*/

if( $_REQUEST['COL$J'] == "1" )
	{
		$product_array = array_map( 'str_getcsv' , file( 'frontend_products.csv' ) );
		$product_id = $_REQUEST['COL$H'];
		if( !in_array( $product_id , $product_array[0] ) )
			{
				$product_array[0][] = $product_id;
				$fp = fopen( 'frontend_products.csv' , 'w' );
				fputcsv( $fp , $product_array[0] );
				fclose( $fp );
			}
		//echo $product_id;
	}