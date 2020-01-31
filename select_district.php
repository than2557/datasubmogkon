<?php
$conn = new mysqli("localhost","root","","datasubmogkon");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->query("SET NAMES UTF8");

$a_id = isset($_POST['AMPHUR_ID']) ? $_POST['AMPHUR_ID'] : "";

$sql = "SELECT * FROM districts WHERE AMPHUR_ID='$a_id'";
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
		?>
        <option value="<?php echo $row['DISTRICT_CODE']; ?>">
        <?php echo $row['DISTRICT_NAME'];?> 
        </option>
   <?php }?>


