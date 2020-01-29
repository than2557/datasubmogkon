
<html>
<head>
	<title>TEST add type</title>
	<?
	require_once("connect.php");
	
$sql = "SELECT * FROM category order by id_category";  
$result_category=$conn->query($sql); 
	?>
</head>
<body>
	<form action="inserttype.php" target="_blank" method="POST" enctype="multipart/form-data">
 
  <label>ประเภทสินค้า :</label>


        <select  id="id_category" name="id_category"  style="width:200px; ">
           <option>--เลื่อกประเภทสินค้า--</option>
      <?php
  while($row = $result_category->fetch_assoc())
  { ?>
      <option value="<?=$row['id_category'];?>"> <?=$row['cateory_name'];?> </option>  
 <?php } ?>  

     </select>
    </div>


     <div class="w3-section">
          <label>รหัสชนิท</label>
          <input class="w3-input w3-border" type="text" name="type_id" id="type_id">
        </div>


    <div class="w3-section">
          <label>ชื่อชนิท</label>
 <input class="w3-input w3-border" type="text" name="name_type" id="name_type">
        </div>

    <button type="submit" >add</button>

	</form>


</body>
</html>