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
  <link rel="stylesheet" href="index.css">
  <script>
function myFunction() {
    window.open("login_form.php");
}
function myFunction2() {
    window.open("addem.php");
}
</script>
<body  class="w3-light-grey w3-content"  style="max-width:1600px;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:240px;font-weight:bold" id="mySidebar"><br>
<a  style="width:45%;" class="w3-round"></a>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<dropdown>
  <input id="toggle1" type="checkbox" checked>
  <label for="toggle1" class="animate">MENU<i class="fa fa-bars float-right"></i></label>
  <ul class="animate" >
   <button onclick="myFunction()"> <li class="animate">login<i class="fa fa-code float-right"></i></li></button>
   <button onclick="myFunction2()"> <li class="animate">Zoom<i class="fa fa-arrows-alt float-right"></i></li></button>
    <li class="animate">Settings<i class="fa fa-cog float-right"></i></li>
  </ul>
</dropdown>



<dropdown>
  <input id="toggle2" type="checkbox">
  <label for="toggle2" class="animate">Menu<i class="fa fa-bars float-right"></i></label>
  <ul class="animate">
    <li class="animate">Code<i class="fa fa-code float-right"></i></li>
    <li class="animate">Zoom<i class="fa fa-arrows-alt float-right"></i></li>
    <li class="animate">Settings<i class="fa fa-cog float-right"></i></li>
  </ul>
</dropdown>


</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">SubMongKon</span>



  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>





<center><div class="container">

      <div class="topindex">
 
    </div>
</div></center>






<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="contrainer">
  <div class="wrapper">
<div class="wrap">
  
  
  
  <header>   
    <div class="logo" ><img src="08bd1.png" class="img"></div>
    <nav>
      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </nav>
  </header>
  
  
  <section class="cards">
   
  <div class="cards">


<div class="card">
  <img class="card__image" src="08bd1.png" alt="wave" />
  <div class="card-title">
    <a href="#" class="toggle-info btn">
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
        Card title
        <small>Image from unsplash.com</small>
    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
      This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        <a href="#" class="btn">Read more</a>
      </div>
    </div>
  </div>
</div>
</div>

    
  </section>
  
  <section class="contentbox" style="margin-top: 300px;">
    <div class="headline"></div>
    <div class="text"></div>
    <div class="text"></div>
    <div class="text"></div>
    <div class="button"></div>
  </section>
  
</div>
</div>
  
<footer></footer>
</body>
</html>
