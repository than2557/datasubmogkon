<?php
$conn = new mysqli("localhost","root","","datasubmogkon");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->query("SET NAMES UTF8");

$p_id = isset($_POST['PROVINCE_ID']) ? $_POST['PROVINCE_ID'] : "";


$sql = "SELECT * FROM amphures  WHERE  PROVINCE_ID ='$p_id' ";
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
		?>
        <option value="<?php echo $row['AMPHUR_ID']; ?>">
        <?php echo $row['AMPHUR_NAME'];?> 
        </option>

   <?php }?>


