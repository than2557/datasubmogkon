<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


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
mysql_connect("localhost","root","123456789");
mysql_select_db("datasubmongkon");
$sql = "SELECT * FROM product_stock";
$objQuery = mysql_query($sql)  or die(mysql_error());



//min max type จำนวนสินค้าเรียกจากฐานข้อมูล
?>
<body>

<form  method="POST">
<br>
<br>
<center><input class="form-control"   style="width: 200px;"  id="product_code" autofocus  hidden="true"></center>





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