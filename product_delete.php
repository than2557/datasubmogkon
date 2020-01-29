<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php


require_once("connect.php");
//INSERT INTO `program` (`prg_id`, `prg_name`) VALUES ('3206', 'วิทย์คอม'), ('3201', 'วิทย์อาหาร');
$proid = $_GET['product_code'];
$sql = "delete from product where product_code=$proid";
$conn->query($sql);

echo $sql;    
?>
<meta http-equiv="refresh" content="0; url =displayproduct.php">
</body>
</html>