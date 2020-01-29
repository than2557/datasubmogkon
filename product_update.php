
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<?php
	require_once("connect.php"); 
	
	$qty=$_POST['qty'];
	$name_product=$_POST['name_product'];
	$price=$_POST['price'];
	$img_product =$_POST['$img_product']; 
	$product_code=$_POST['product_code'];

if(move_uploaded_file($_FILES["img_product"]["tmp_name"],"upload/".$_FILES['img_product']["name"]))
	{
	
		echo "copy/upload Complete<br>";
	$picture=$_FILES["img_product"]["name"];
	
		$sql = "update product_stock set qty='$qty',name_product='$name_product',price='$price',img_product='$picture' WHERE product_code='$product_code'";
$conn->query($sql);
echo $sql;
}?>
<!--<meta http-equiv="refresh" content="0; url =displayproduct.php">-->
</body>
</html>
