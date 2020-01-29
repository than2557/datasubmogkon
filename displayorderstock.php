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
		<?php 

		require_once("connect.php");





		$sql = "SELECT * FROM orderstock,orderstock_detail,product_stock,brand_product,product_type WHERE orderstock.Orderstock_ID=orderstock_detail.Orderstock_ID AND orderstock_detail.product_code = product_stock.product_code  and product_stock.brand_id = brand_product.brand_id and product_stock.type_id=product_type.type_id ORDER BY product_id";
    date_default_timezone_set("Asia/Bangkok");
		$result=$conn->query($sql);
    $sss =  $result->OrderDate;
function DateThai($strDate)
  {
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
  }



	
	?>


	<title>ข้อมูลการสั่งซื้อสินค้าเข้าร้าน</title>
</head>
<body>
<div>
		<table class="table table-bordered table-striped" id="myTable" style="width:500px;height:400px ;border-radius: 100%;">
  <thead>
    <tr>
      <th>รหัสการสั่งสินค้า</th>
      <th>วันที่สั่งซื้อ</th>
      <th>ลายละเอียด</th>
      <th>ยืนยันสินค้าเข้าร้าน</th>
      <th>ยกเลิก</th>
    </tr>
  </thead>
  <tbody>
     <?php
  while($row = $result->fetch_assoc()){
    ?>

    <tr>
      <td><?=$row['Orderstock_ID'];?></td>
        <td><?php echo DateThai($sss);?> น.</td>
        <td><a a href="displayorderstockdetail.php?Orderstock_ID=<?=$row['Orderstock_ID'];?>">ลายละเอียด<a></td>
     <td><a href="stock_form_update.php?Orderstock_ID=<?=$row['Orderstock_ID'];?>" onClick="return window.confirm('ยืนยันการเข้าคลังสินค้า ?')"><img src="upload/14512.png" style="width:50px;text-align: center;"></a></td>
      <td><a href="product_delete.php?OrderstockID=<?=$row['Orderstock_ID'];?>" onClick="return window.confirm('แน่ใจเหรอ?')"><img src="upload/47-512.png" style="width:50px;"></a></td>
    </tr>

    <?php }?>  
  </tbody>
</table>
</body>
</html>