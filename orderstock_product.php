<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>orderstock</title>

	<?php
	require_once("connect.php");
	 $sql = "SELECT * FROM product_stock WHERE product_stock.qty < 4  ORDER BY product_id";
	$result=$conn->query($sql);



	?>
</head>
<body>
	<div class="container">
  
  <form action="insertorder_stock.php" class="was-validated" method="POST">
    <div class="form-group">
      <label for="uname">สินค้า:</label>
      <select   class="form-control col-md-1"  style="width: 500px" id="product_id" name="product_id" >
      	<div class="valid-feedback">ข้อมูลถูกต้อง</div>
      <div class="invalid-feedback">กรุณากรอกข้อมูล.</div>
           <option>--เลื่อกสินค้า--</option>
      <?php
  while($row = $result->fetch_assoc())
  { ?>  
      <option value="<?=$row['product_id'];?>"><?=$row['name_product'];?> </option>  
 <?php } ?>  

     </select>
     <label for="uname">จำนวนสินค้า:</label>
      <input type="text" class="form-control" id="qty" placeholder="กรอกจำนวนสินค้า" name="qty" required style="width: 200px;">
      <div class="valid-feedback">ข้อมูลถูกต้อง</div>
      <div class="invalid-feedback">กรุณากรอกข้อมูล.</div>
    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>