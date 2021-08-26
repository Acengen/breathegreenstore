<?php
$carry = "?" . $_SERVER["QUERY_STRING"];
header( "Location: ../checkout.php".$carry );
exit();
