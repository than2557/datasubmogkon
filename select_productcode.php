<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="/phpexcel/lib/Bootstrap_4/bootstrap.min.css">
  <script src="/phpexcel/lib/Jquery/jquery.js"></script>
  <script src="/phpexcel/lib/Bootstrap_4/bootstrap.min.js"></script> -->
  
  <script type="text/javascript" src="index.js"></script>
  <link rel="stylesheet" href="index.css">
  <style></style>
  <title>Document</title>
</head>
<body>
<?php
  require("connect.php");



$t_id = isset($_POST['product_code']) ? $_POST['product_code'] : "";



$sql = "SELECT * FROM product_stock  WHERE  product_code='$t_id ' ";
$result = $conn->query($sql);

?>
<center>
<div class='row'>
   <?php
  while($row = $result->fetch_assoc()){
    ?>
  
  <div class='product--blue'style="width:400;height:400px;">
    <div class='product_inner'>
      <img src='upload/<?=$row['img_product']?>' width='300'>
      <p><?=$row['name_product']?></p>
      <p>ราคา:<?=$row['price']?></p>
      <p>จำนวน :<input class="form-control" type="number" style="width:100px;"></p>
      
      <button style="width:250px;">ซื้อสินค้า</button>
    </div>
    <div class='product_overlay'>
      <h2>เพิ่มในตะกร้า</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
  <?php }?>  
</div>
</center>
</body>
</html>

