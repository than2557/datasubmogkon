
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <title>รายงาน</title>

 <script src="bootstrap000/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap000/css/bootstrap.min.css">
<script src="bootstrap000/js/popper.min.js"></script>
<script src="bootstrap000/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>




<!--/.WORK SPACE-->
  <div style="background-color:#b3ffda;" class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">

<?php
  ini_set('display_errors', 1);
  error_reporting(~0);

  $strKeyword = null;
    

  if(isset($_POST["states"]))
  {
    $strKeyword = $_POST["states"];
  }
    
?>

<?
require_once("connect.php");
 
  $sql = "SELECT * FROM `orders`,orders_detail,product_stock WHERE orders.OrderID=orders_detail.OrderID AND orders_detail.product_code=product_stock.product_code
 and name_product LIKE '%".$strKeyword."%'  ORDER BY product_id";
  $result=$conn->query($sql);

?>


       
        <div class="table-responsive-md">
          <center><h2>รายงานการขายสินค้า</h2></center>

          <div style='border:solid 5px #00b35c;background-color:#CEF6F5;' class='nav flex-column'>
          <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table class="table table-hover"  >
    <tr>
        <th><div class="w3-container w3-card w3-white w3-round w3-margin col-sm-3" align="center" ><h3>ค้นหาชื่อสินค้า</h3>
      <input class="form-control" name="states" type="text" id="states" value="<?php echo $strKeyword;?>">
     <br> <input type="submit" value="ค้นหาข้อมูลการขาย" class="btn btn-primary">  <br>  <br></div></th>
    </tr>
  </table>
</form> 
          </div>

        <table class="table table-bordered table-striped" style="border-radius: 500%;">
  <thead>
    <tr>
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>จำนวนสินค้าในคลัง</th>
      <th>จำนวนสินค้าที่ขาย</th>
      <th>ราคาสินค้า</th>
       <th>ราคารวม</th>
      <th>รูป</th>
     
    </tr>
  </thead>
  <tbody>
     <?php
  while($row = $result->fetch_assoc()){
    ?>

    <tr>
      <td><?=$row['product_code'];?></td>
      <td><?=$row['name_product'];?></td>
    
      <td><?=$row['qty'];?></td>
        <td><?=$row['Qty'];?></td>
         <td><?=$row['Qty']*$row['price'];

         ?></td>
        <td><?=$row['price'];?></td>
      <td><img src="upload/<?=$row['img_product'];?>" height="100" width="100" style="border-radius: 100%;"></td>
      
    </tr>

    <?php }?>  
  </tbody>
</table>

</div>
      </div>
    </div>
  </div>
  <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom"><p><a href="index_admin.php" data-toggle="tooltip" title="Visit w3schools">กลับหน้าหลัก</a></p></button>
</body>
</html>