
<html>
<head>
	<title>TEST add type</title>
	<?
	require_once("connect.php");
	
$sql = "SELECT * FROM product_type order by type_id";  
$result_type=$conn->query($sql); 
	?>
</head>
<body>
	<form action="insertformat.php" target="_blank" method="POST" enctype="multipart/form-data">
 
  <label>ชนิด :</label>


        <select  id="type_id" name="type_id"  style="width:200px; ">
           <option>--เลื่อกชนิด--</option>
      <?php
  while($row = $result_type->fetch_assoc())
  { ?>
      <option value="<?=$row['type_id'];?>"> <?=$row['name_type'];?> </option>  
 <?php } ?>  

     </select>
    </div>


     <div class="w3-section">
          <label>ชื่อรูปแบบ</label>
<input class="w3-input w3-border" type="text" name="format_name"  id="format_name">
        </div>


  

    <button type="submit" >add</button>

	</form>


</body>
</html>