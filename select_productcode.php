<?php
  require_once("connect.php");



$t_id = isset($_POST['product_code']) ? $_POST['product_code'] : "";



$sql = "SELECT * FROM product_stock  WHERE  product_code='$t_id ' ";
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    ?>      
<center>

  
 <tr>
	
    <td><a href="order.php?product_code=<?php echo $row["product_code"];?>" class="btn btn-primary" onclick="JSalert()">หยิบใส่ตะกร้า </a></td>
  </tr>
  
</table></center>	



   <?php }?>