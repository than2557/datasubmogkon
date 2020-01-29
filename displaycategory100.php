<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

		$sql = "SELECT * FROM product_stock,brand_product,product_type,category WHERE category.id_category= '100' and product_stock.brand_id = brand_product.brand_id and product_stock.type_id=product_type.type_id and product_stock.id_category =category.id_category ORDER BY product_id";
		$result=$conn->query($sql);
	?>

<div><label>ประเภทสินค้า</label>
  <select  class="form-control col-md-1" id="id_category" name="id_category"  style="width:200px;">
           <option>--เลื่อกประเภทสินค้า--</option>
      <?php
  while($row = $result2->fetch_assoc())
  { ?>  
      <option value="<?=$row['id_category'];?>"> <?=$row['cateory_name'];?> </option>  
 <?php } ?>  

     </select>

</div>


</head>
<body>

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