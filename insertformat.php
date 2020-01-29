<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require_once("connect.php");




$format_name =$_POST['format_name'];
$type_id=$_POST['type_id'];



$sql="INSERT INTO format_product (format_name,type_id)VALUES('$format_name','$type_id')";
$conn->query($sql);
echo $sql;

?>
</body>
<meta http-equiv="refresh" content="0;URL=add_format.php">
</html>