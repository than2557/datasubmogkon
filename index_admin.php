<!DOCTYPE html>
<html>
<title>submongkon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>ทรัพย์มงคล</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="additemproduct.php" class="w3-bar-item w3-button">เพิ่มข้อมูลสินค้า</a>
    <a href="#product" class="w3-bar-item w3-button">สินค้า</a>
     <a href="displayproductcf.php" class="w3-bar-item w3-button">ข้อมูลสินค้า</a>
       <a href="displayorder.php" class="w3-bar-item w3-button">ข้อมูลการขายสินค้า</a>
        <a href="displayorderstock.php" class="w3-bar-item w3-button">ข้อมูลการสั่งซื้อสินค้า</a>
          <a href="form_shoping.php" class="w3-bar-item w3-button">ขายสินค้า</a>
     <a href="displayem.php" class="w3-bar-item w3-button">ข้อมูลพนักงาน</a>
      <a href="index_test.php" class="w3-bar-item w3-button">สั่งซื้อสินค้า</a>
       <a href="displayniceslea.php" class="w3-bar-item w3-button">สินค้าขายดี</a>
     <a href="logout.php" class="w3-bar-item w3-button">ออกจากระบบ</a>
   
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">SUBmongkon</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>


</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">ร้านทรัพย์มงคล</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>		
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="upload/s1.jpg" alt="Jeans" style="width:500px;height: 300px;">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px;">
     
    
    </div>
  </div> 
  <br>
<br>

 <?php
session_start();
mysql_connect("localhost","root","123456789");
mysql_select_db("datasubmongkon");
$sql = "SELECT * FROM `product_stock`,brand_product WHERE brand_product.brand_id = product_stock.brand_id";
$objQuery = mysql_query($sql) or die(mysql_error());


/*$sql2 = "SELECT a.product_code,b.brand_id  FROM product_stock a,brand_product b WHERE a.brand_id = b.brand_id";
$objQuery2 = mysql_query($sql2)  or die(mysql_error());*/



//min max type จำนวนสินค้าเรียกจากฐานข้อมูล
?>



  <!-- Product grid -->
  
<?php
  while($objResult = mysql_fetch_array($objQuery))
  {
    if($objResult['qty']<5){


        require_once("lessproduct.php");
        // elseif (condition) {
        //   # code...
        // }
    }

    
  ?>
  

    <div class="w3-col l3 s6">
      <div class="w3-container" style="background-color:  #b3d9ff;" id="product">
        <img src="upload/<?php echo $objResult["img_product"];?>" style="width:150px;height:200px;">
        <p><?php echo $objResult["brand_name"]?> ราคา| <b><?php echo $objResult["price"]?></b></p>จำนวน<p><?php echo $objResult["qty"]?></p>       
      </div>
      </div>
 
	
    
  <?php
  }
  ?>

      







<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
