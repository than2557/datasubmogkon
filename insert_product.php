
<!DOCTYPE html> <html>
<head>
	<title></title>
</head>
<body>
<?php

require_once("connect.php");




$id_category=$_POST['id_category'];
$type_id=$_POST['type_id'];
$qty=$_POST['qty'];
$brand_id=$_POST['brand_id'];
$format_id=$_POST['format_id'];
$unit_name=$_POST['unit_name'];
$name_product=$_POST['name_product'];
$price=$_POST['price'];
$img_product=$_POST['img_product'];




if($_POST['product_code']!=""){

	$product_code=$_POST['product_code'];
	
}

else {
	
$product_code=$_POST['id_category'].$_POST['type_id'].$_POST['brand_id'].$_POST['format_id'];	
}




if(move_uploaded_file($_FILES["img_product"]["tmp_name"],"upload/".$_FILES['img_product']["name"]))
{
	echo "copy/Upload Complete<br>";
	$picture=$_FILES["img_product"]["name"];



	$sql = "INSERT INTO `product_stock`(`id_category`, `type_id`, `qty`, `brand_id`, `format_id`, `unit_name`, `name_product`, `price`, `img_product`, `product_code`) VALUES ('$id_category','$type_id','$qty','$brand_id','$format_id ','$unit_name','$name_product','$price','$picture','$product_code')";

	$Query =$conn->query($sql);
	echo $sql;
	echo $product_code;
}




?>
</body>
<meta http-equiv="refresh" content="0;URL=additemproduct.php">