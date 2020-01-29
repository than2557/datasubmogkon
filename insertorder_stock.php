<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require_once("connect.php");
date_default_timezone_set("Asia/Bangkok");



$product_id=$_POST['product_id'];
$qty=$_POST['qty'];




$sql="INSERT INTO orderproductsinstock (product_id,qty,date_orderstock,status)VALUES('$product_id','$qty','".date("Y-m-d H:i:s")."','0')";
$conn->query($sql);
echo $sql;

?>
</body>

<meta http-equiv="refresh" content="0;URL=orderstock_product.php">
</html>