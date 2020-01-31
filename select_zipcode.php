<?php
require('connect.php');

$z_id = isset($_POST['DISTRICT_CODE']) ? $_POST['DISTRICT_CODE'] : "";


$sql = "SELECT * FROM zipcodes  WHERE  DISTRICT_CODE ='$z_id' ";
$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['zipcode'];
	?>


