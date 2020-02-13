
<html>
<head>
	<title>TEST add brand</title>
	<?php
	require("connect.php");
	
$sql = "SELECT * FROM product_type order by type_id";  
$result_type=$conn->query($sql); 
	?>
</head>
<body>
	<form action="insertbrand.php" target="_blank" method="POST" enctype="multipart/form-data">
 
  <label>ชนิด :</label>


        <select  id="type_id" name="type_id"  style="width:200px; ">
           <option>--เลื่อกชนิท--</option>
      <?php
  while($row = $result_type->fetch_assoc())
  { ?>
      <option value="<?=$row['type_id'];?>"> <?=$row['name_type'];?> </option>  
 <?php } ?>  

     </select>
    </div>


     <div class="w3-section">
          <label>ชื่อยี่ห้อ</label>
<input class="w3-input w3-border" type="text" name="brand_name"  id="brand_name">
        </div>


  

    <button type="submit" >add</button>

	</form>


</body>
</html>