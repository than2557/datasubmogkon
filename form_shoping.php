<!DOCTYPE html>
<html>
<head>
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


  <title>shopping</title>


  <script type="text/javascript">

$(function() {
    


  $('#product_code').change(function() {
   // alert('test');


                    $.ajax({
                        type: 'POST',
                        data: {product_code: $(this).val()},
                        url: 'select_productcode.php',
                        success: function(data) {
                        //alert("data : ",data);
                       $('#bnt_product_code').html(data);     
                      //$('#results').html(data);
                        },
            error: function(jqXHR, text, error){
            // Displaying if there are any errors
                  $('#results').html(error);           
        }
                    });
                    return false;
                }); 
        
  
});
</script>



<script type="text/javascript">
  
  function myFunction() {
  var x = document.getElementById("product_code").autofocus;
 document.getElementById("demo").innerHTML = x;
}
</script>

</head>
<button onclick="myFunction()" hidden="true">Try it</button>

<p id="demo" hidden="true"></p>
<?php
session_start();
require('connect.php');
$sql = "SELECT * FROM product_stock";
$result=$conn->query($sql);
?>
<body>

<form  method="POST">
<br>
<br>
<center><input class="form-control"   style="width: 200px;"  id="product_code" autofocus></center>

<div id="bnt_product_code">

</div>






<div>

<br>
<br>
<?
require_once("show.php");


?>
</div>
  </form>


</body>
</html>