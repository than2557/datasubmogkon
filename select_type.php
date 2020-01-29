<?php
  require_once("connect.php");



$t_id = isset($_POST['id_category']) ? $_POST['id_category'] : "";



$sql = "SELECT * FROM product_type  WHERE  id_category='$t_id ' ";
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    ?>
        <option value="<?php echo $row['type_id']; ?>">
        <?php echo $row['name_type'];?> 
        </option>


        
   <?php }?>