<!DOCTYPE html>
<html>
<head>
	 <?
 require_once("connect.php");
 $sql = "SELECT * FROM product_stock order by product_id";  
$result_product=$conn->query($sql); 
 ?>
	<title>barcode</title>
</head>
<body>
<form method="post" action="barcode.php">
	
	<label class="control-label col-sm-2" for="typeproduct">ชื่อสินค้า :</label>

     <select  class="form-control col-md-1" id="product_id" name="product_id"  style="width:200px; ">
           <option>--เลื่อกชื่อสินค้า--</option>
      <?php
  while($row = $result_product->fetch_assoc())
  { ?>
      <option value="<?=$row['product_code'];?>"> <?=$row['name_product'];?> </option>  
 <?php } ?>  

     </select>


     <input type="submit" name="submit" value="submit">



</form>
</body>
</html>