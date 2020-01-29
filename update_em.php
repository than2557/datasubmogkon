
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
	
$em_id=$_POST['em_id'];
$per_id=$_POST['per_id'];
$name=$_POST['name'];
$PROVINCE_ID=$_POST['PROVINCE_ID'];
$AMPHUR_ID=$_POST['AMPHUR_ID'];
$DISTRICT_CODE=$_POST['DISTRICT_ID'];
$zipcode=$_POST['zipcode'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$address=$_POST['address'];

$img_product=$_POST['img_product'];
$tel=$_POST['tel'];

if(move_uploaded_file($_FILES["img_product"]["tmp_name"],"upload/".$_FILES['img_product']["name"]))
{
	echo "copy/Upload Complete<br>";
	$picture=$_FILES["img_product"]["name"];



	$sql = "UPDATE `empolyee` SET `per_id`='$per_id',`name`='$name',`PROVINCE_ID`='$PROVINCE_ID',`AMPHUR_ID`='$AMPHUR_ID',`DISTRICT_CODE`='$DISTRICT_CODE',`zipcode`='$zipcode',`username`='$username',`password`='$password',`address`='$address',`image`='$picture',`tel`='$tel',`level`='0' WHERE em_id='$em_id'";

	$Query =$conn->query($sql);
	echo $sql;

}?>
<!--<meta http-equiv="refresh" content="0; url =displayproduct.php">-->
</body>
</html>
