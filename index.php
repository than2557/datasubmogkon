<!DOCTYPE html>
<html>
<title>submongkon</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/png" href="08bd1.png"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="/phpexcel/lib/Bootstrap_4/bootstrap.min.css">
  <script src="/phpexcel/lib/Jquery/jquery.js"></script>
  <script src="/phpexcel/lib/Bootstrap_4/bootstrap.min.js"></script>

  <script type="text/javascript" src="/phpexcel/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="index.js"></script>
  <script type="text/javascript" src="/phpexcel/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link href="/phpexcel/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <link rel="stylesheet" href="index.css">
  <style></style>
  <script>
function myFunction() {
    window.open("login_form.php");
}
function myFunction2() {
    window.open("addem.php");
}
function myFunction3() {
    window.open("additemproduct.php");
}

</script>

<?php


require('connect.php');
$sql = "SELECT * FROM `product_stock` WHERE product_code ORDER BY `product_code`";
$result=$conn->query($sql);
// print_r($result);
?>
<body  class="w3-light-grey w3-content">

<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:259px;font-weight:bold;margin-left: -14%;" id="mySidebar"><br>
<a  style="width:45%;" class="w3-round"></a>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>

<dropdown>
  <input id="toggle1" type="checkbox" checked>
  <label for="toggle1" class="animate">MENU<i class="fa fa-bars float-right"></i></label>
  <ul class="animate" >
   <button onclick="myFunction()"> <li class="animate">login<i class="fa fa-code float-right"></i></li></button>
   <button onclick="myFunction2()"> <li class="animate">register<i class="fa fa-arrows-alt float-right"></i></li></button>
    <li class="animate">Settings<i class="fa fa-cog float-right"></i></li>
  </ul>
</dropdown>

<!-- onclick="myFunction()" -->

<dropdown>
  <input id="toggle2" type="checkbox">
  <label for="toggle2" class="animate">Menu<i class="fa fa-bars float-right"></i></label>
  <ul class="animate">
  <button onclick="myFunction3()"> <li class="animate">addproduct<i class="fa fa-code float-right"></i></li></button>
    <li class="animate">Zoom<i class="fa fa-arrows-alt float-right"></i></li>
    <li class="animate">Settings<i class="fa fa-cog float-right"></i></li>
  </ul>
</dropdown>


</nav>







<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">SubMongKon</span>



  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>




<!-- 
<center><div class="container">

      <div class="topindex">
 
    </div>
</div></center> -->






<!-- Overlay effect when opening sidebar on small screens -->
 <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
 

 <header>
  <ul>
    <i class='fa fa-shopping-cart'>
      <span class='counter'></span>
    </i>
  </ul>
</header>

<div class='row'>

 
  

  
  
</body>
</html>
