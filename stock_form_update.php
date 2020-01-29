<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php

  $Orderstock_ID = $_GET['Orderstock_ID'];
   require_once("connect.php");

 $sql ="SELECT * FROM orderstock,orderstock_detail,product_stock,brand_product,product_type WHERE orderstock.Orderstock_ID=orderstock_detail.Orderstock_ID AND orderstock_detail.product_code = product_stock.product_code and product_stock.brand_id = brand_product.brand_id and product_stock.type_id=product_type.type_id and orderstock.Orderstock_ID='$Orderstock_ID'";
  $result=$conn->query($sql);
  $row_pro=$result->fetch_assoc();
  echo $result['Orderstock_ID'];
 ?>
<form action="" method="POST">
  <label>รหัสสั่งซื้อ</label>
  <input type="text" name="product_code" value="<?=$result['Orderstock_ID'];?>">
<!--    <input type="text" name="name" id="name" value="" class="form-control col-sm-1" style="width: 150px"> -->
</form>
</body>
</html>
 





