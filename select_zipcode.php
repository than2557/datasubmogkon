<?php
$conn = new mysqli("localhost","root","123456789","datasubmongkon");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->query("SET NAMES UTF8");

$z_id = isset($_POST['DISTRICT_CODE']) ? $_POST['DISTRICT_CODE'] : "";


$sql = "SELECT * FROM zipcodes  WHERE  DISTRICT_CODE ='$z_id' ";
$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['zipcode'];
	?>


