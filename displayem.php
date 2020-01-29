
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
 
  $sql = "SELECT * FROM empolyee,provinces,districts,amphures WHERE empolyee.AMPHUR_ID=amphures.AMPHUR_ID and empolyee.PROVINCE_ID=provinces.PROVINCE_ID and empolyee.DISTRICT_CODE=districts.DISTRICT_CODE and name LIKE '%".$strKeyword."%'  ORDER BY em_id";
  $result2=$conn->query($sql);

?>


       
        <div class="table-responsive-md">
          <center><h2>รายงานพนักงาน</h2></center>

          <div style='border:solid 5px #00b35c;background-color:#CEF6F5;' class='nav flex-column'>
          <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table class="table table-hover"  >
    <tr>
        <th><div class="w3-container w3-card w3-white w3-round w3-margin col-sm-3" align="center" ><h3>ค้นหาชื่อ</h3>
      <input class="form-control" name="states" type="text" id="states" value="<?php echo $strKeyword;?>">
     <br> <input type="submit" value="ค้นหาชื่อพนักงาน" class="btn btn-primary">  <br>  <br></div></th>
    </tr>
  </table>
</form> 
          </div>

        <table class="table table-bordered table-striped" style="border-radius: 500%;">
  <thead>
    <tr>
      <th>ไอดีพนักงาน</th>
      <th>username</th>
      <th>ชื่อ</th>
      <th>ที่อยู่</th>
      <th>เบอร์ติดต่อ</th>
      <th>รูป</th>
    
      <th>แก้ไข</th>
      
    </tr>
  </thead>
  <tbody>
     <?php
  while($row = $result2->fetch_assoc()){
    ?>

    <tr>
      <td style="width: 200px;text-align:right;"><?=$row['em_id'];?></td>
      <td><?=$row['username'];?></td>
      <td><?=$row['name'];?></td>
      <td><?=$row['address']." ".$row['PROVINCE_NAME']."  ".$row['AMPHUR_NAME']." ".$row['DISTRICT_NAME']." ".$row['zipcode'];?></td>
      <td style="width: 200px;text-align:right;"><?=$row['tel'];?></td>
      <td><img src="upload/<?=$row['image'];?>" height="100" width="100" style="border-radius: 100%;"></td>
      <td><a href="updateem.php?em_id=<?=$row['em_id'];?>"><img src="upload/Edit-512.png" style="width:100px;"></a></td>
    
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