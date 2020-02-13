<?php
  require("connect.php");



$t_id = isset($_POST['type_id']) ? $_POST['type_id'] : "";



$sql = "SELECT * FROM format_product  WHERE  type_id='$t_id ' ";

$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    ?>
        <option value="<?php echo $row['format_id']; ?>">
        <?php echo $row['format_name'];?> 
        </option>
   <?php }?>