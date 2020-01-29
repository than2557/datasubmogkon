<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="datatables.css"/>
 
<script type="text/javascript" src="datatables.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
	<title>display whit data table</title>


	<?php 

		require_once("connect.php");



  $sql2 ="SELECT * FROM category ORDER BY id_category";
  $result2=$conn->query($sql2);

		$sql = "SELECT * FROM product_stock,brand_product,product_type,category WHERE product_stock.qty < 4 and product_stock.brand_id = brand_product.brand_id and product_stock.type_id=product_type.type_id and product_stock.id_category =category.id_category ORDER BY product_id";
		$result=$conn->query($sql);
	?>





</head>
<body>
  <center>
    
<a href="displaycategory100.php" class="btn btn-primary">ประปา</a>
<a href="displaycategory200.php" class="btn btn-primary">ไฟฟ้า</a>
<a href="displaycategory300.php" class="btn btn-primary">ไม้</a></center>
<div>
		<table class="table table-bordered table-striped" id="myTable" style="width: 500px;height:400px ;border-radius: 100%;">
  <thead>
    <tr>
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>ชนิทสินค้า</th>
      <th>แบรนด์สินค้า</th>
      <th>จำนวนสินค้า</th>
      <th>ราคา</th>
      <th>รูป</th>
      <th>แก้ไข</th>
      <th>ลบ</th>
    </tr>
  </thead>
  <tbody>
     <?php
  while($row = $result->fetch_assoc()){
    ?>

    <tr>
      <td><?=$row['product_code'];?></td>
      <td><?=$row['name_product'];?></td>
      <td><?=$row['name_type'];?></td>
      <td><?=$row['brand_name'];?></td>
      <td><?
        if( $row['qty']>5){

           echo   $row['qty'];

        }
    else{

      echo   $row['qty']."   "."สินค้าใกล้หมด";

          echo "<img src='upload /icon-alert.jpg'  style='width: 50px;'>"; 
    }



      ?></td>
        <td><?=$row['price'];?></td>
      <td><img src="upload/<?=$row['img_product'];?>" height="100" width="100" style="border-radius: 100%;"></td>
      <td><a href="product_form_update.php?product_code=<?=$row['product_code'];?>"><img src="upload/Edit-512.png" style="width:50px;"></a></td>
      <td><a href="product_delete.php?product_code=<?=$row['product_code'];?>" onClick="return window.confirm('แน่ใจเหรอ?')"><img src="upload/47-512.png" style="width:50px;"></a></td>
    </tr>

    <?php }?>  
  </tbody>


</table>





	
</div>

</body>
</html>