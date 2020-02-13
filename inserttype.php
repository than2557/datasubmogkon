<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require_once("connect.php");




$id_category=$_POST['id_category'];
$type_id=$_POST['id_category'].$_POST['type_id'];
$name_type=$_POST['name_type'];



$sql="INSERT INTO product_type (id_category,type_id,name_type)VALUES('$id_category','$type_id','$name_type')";
$conn->query($sql);
echo $sql;

?>
</body>
<meta http-equiv="refresh" content="0;URL=add_type.php">
</html>