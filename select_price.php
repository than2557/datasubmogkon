<?php
  require_once("connect.php");



$t_id = isset($_POST['product_id']) ? $_POST['product_id'] : "";



$sql = "SELECT * FROM product_stock  WHERE  product_id ='$t_id ' ";

$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    ?>
<option  value=" <?php echo $row['price'];?> ">
			 <?php echo $row['price'];?> 
		</option>
          



   <?php }?>