  
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  

  $(document).ready( function () {
    $('#myTable').DataTable();
} );

  
</script>

   
 


	<title>submonkon</title>	



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>

<link rel="stylesheet" href="sweetalert2.min.css">
	<style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
         label{
             text-align: left;
            color: #000000;
           
            padding: 2%;


        }
        table th{
            background-color: #efefef;
        }

        input{
          text-align: left;
          text-decoration-color: #000000;
          width: 30%;

        }
       body{
           background-color: #e6eeff;

        }
    </style>
    <script type="text/javascript">
function JSalert(){
   
Swal.fire({
  position: 'top-end',
  type: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
}
</script>





</head>

<?php
session_start();
mysql_connect("localhost","root","123456789");
mysql_select_db("datasubmongkon");
$sql = "SELECT * FROM `product_stock`,brand_product WHERE product_stock.qty<4 And brand_product.brand_id = product_stock.brand_id

";
$objQuery = mysql_query($sql) or die(mysql_error());


/*$sql2 = "SELECT a.product_code,b.brand_id  FROM product_stock a,brand_product b WHERE a.brand_id = b.brand_id";
$objQuery2 = mysql_query($sql2)  or die(mysql_error());*/



//min max type จำนวนสินค้าเรียกจากฐานข้อมูล
?>



<body>
  <br>
<div class="container" style="width: 500px;background-color:   #66a3ff;">
  <div class="container" style="width: 100%;">
            <h2>ทรัพย์มงคล</h2>
          
        </div>  
      </div>
	<div class="btn-group btn-group-justified"><center><br>
    <a href="showorderstock.php" class="btn btn-primary">ตะกร้า <?php echo $_SESSION["meqty"]; ?></a> <a href="clearorderstock.php" class="btn btn-primary">เคลียร์ตะกร้า</a> <a href="additemproduct.php" class="btn btn-primary">เพิ่มข้อมูลสินค้า</a>
<a href="createbarcode.php" class="btn btn-primary">พิมพ์บาร์โค้ด</a>
<a href="displayorderstock.php" class="btn btn-primary">ข้อมูลการสั่งซื้อ</a></center>

  </div>
	<br>

 <center><div style="background: #b3ffe6
;width: 1000px;height:400px; " > 
  <br>
  <br>
<center><table style="width: 100%"  border="1" class="table table-striped" id="table_id">
  <tr>
    <td width="101">รูป</td>
    <td width="101">รหัสสินค้า</td#e6ffff;> 
    <td width="100">ชื่อสินค้า</td>
    <td width="100">ยี่ห้อ</td>
     <td style="width: 200px">จำนวนในคลัง</td>
    <td width="79">ราคา</td>
    <td width="37">สั่งซื้อสินค้า</td>
  </tr>
  <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
 
  ?>
  
  <tr>
	<td><img style="width: 50px;height: 50px" src="upload/<?php echo $objResult["img_product"];?>"></td>
    <td style="text-align:right;"><?php echo $objResult["product_code"];?></td>
    <td style="text-align:left;" ><?php echo $objResult["name_product"];?></td>
     <td style="text-align:left;"><?php echo $objResult["brand_name"];?></td>
     
    <td style="width: 200px;text-align:right;"><?php  if($objResult['qty']>5){
        
           echo   $objResult['qty'];
    }

    elseif ($objResult['qty']<4) {

     echo   $objResult['qty']." "."ชิ้น";

          echo "<img src='upload /icon-alert.jpg'  style='width: 50px;'>"; 
    }
   
    else{

       echo "สินค้าหมด";
       echo "<img src='upload /icon-alert.jpg'  style='width: 50px;'>";
    }

 ?></td>
    <td><?php echo $objResult["price"];?> บาท</td>
    <td><a href="orderstock.php?product_code=<?php echo $objResult["product_code"];?>" class="btn btn-primary" onclick="JSalert()">สั่งซื้อสินค้า </a></td>
  </tr>
  <?php
  }
  ?>
</table></center>
</div></center>
<?php
mysql_close();
?>
</body>
</html>