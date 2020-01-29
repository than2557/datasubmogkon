<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require_once("connect.php");




$brand_name =$_POST['brand_name'];
$type_id=$_POST['type_id'];



$sql="INSERT INTO brand_product (brand_name,type_id)VALUES('$brand_name','$type_id')";
$conn->query($sql);
echo $sql;

?>
</body>
<!--<meta http-equiv="refresh" content="0;URL=add_brand.php">-->
</html>