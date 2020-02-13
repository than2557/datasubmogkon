
<!DOCTYPE html> <html>
<head>
	<title></title>
</head>
<body>
<?php

require_once("connect.php");




$id_pername=$_POST['id_pername'];
$name=$_POST['name'];
$postname=$_POST['postname'];
$PROVINCE_ID=$_POST['PROVINCE_ID'];
$AMPHUR_ID=$_POST['AMPHUR_ID'];
$DISTRICT_CODE=$_POST['DISTRICT_ID'];
$zipcode=$_POST['zipcode'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$address=$_POST['address'];

$image=$_POST['image'];
$tel=$_POST['tel'];
	
echo $id_pername,$name,$postname,$PROVINCE_ID,$AMPHUR_ID,$DISTRICT_CODE,$zipcode,$username,$password,$address,$image,$tel;

if(move_uploaded_file($_FILES["img_product"]["tmp_name"],"upload/".$_FILES['img_product']["name"]))
{
	echo "copy/Upload Complete<br>";
	$picture=$_FILES["img_product"]["name"];



	$sql = "INSERT INTO `empolyee`(`per_id`, `name`, `PROVINCE_ID`, `AMPHUR_ID`, `DISTRICT_CODE`, `zipcode`, `username`, `password`, `address`, `image`,`tel`,level) VALUES ('$per_id','$name','$PROVINCE_ID','$AMPHUR_ID','$DISTRICT_CODE ','$zipcode','$username','$password','$address','$picture','$tel','0')";

	$Query=$conn->query($sql);
	echo $sql;
	
}




?>

</body>
<!--<meta http-equiv="refresh" content="0;URL=addem.php">-->