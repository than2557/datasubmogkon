<!DOCTYPE html>
<html lang="en">
<head>
   <?
 require_once("connect.php");
 $sql = "SELECT * FROM product_stock order by product_id";  
$result_product=$conn->query($sql); 
 ?>





  <title>PHP Barcode Generator Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  
$(function() {
    
  $('#product_id').change(function() {
    //alert('test');
                    $.ajax({
                        type: 'POST',
                        data: {product_id: $(this).val()},
                        url: 'select_product.php',
                        success: function(data) {
                        alert("data : ",data);
                      $('#product_code').html(data);     
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
  
$(function() {
    
  $('#product_id').change(function() {
   // alert('test');
                    $.ajax({
                        type: 'POST',
                        data: {product_id: $(this).val()},
                        url: 'select_price.php',
                        success: function(data) {
                        //alert("data : ",data);
                      $('#price').html(data);     
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
</head>
<body>


  	<h2 class="text-center">พิมพ์บาร์โค้ด</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<div class="form-group">
       <div class="col-sm-12">
        <br>
      <label class="control-label col-sm-2" for="product">Product:</label>
      
 
          <select  class="form-control col-md-1" id="product_id" name="product_id"  style="width:200px; ">
           <option>--เลื่อกชื่อสินค้า--</option>
      <?php
  while($row = $result_product->fetch_assoc())
  { ?>
      <option value="<?=$row['product_id'];?>"> <?=$row['name_product'];?> </option>  
 <?php } ?>  

     </select>
     </div>
     <br>
             <div class="col-sm-12">
              <br>

      <label class="control-label col-sm-2">product code :  </label>
  
    <select class="form-control col-md-1"  id="product_code" name="product_code" style="width:200px;">
         
  

     </select>
  
   
  
      <label class="control-label col-sm-2">ราคา</label>
     <select class="form-control col-md-1"  id="price" name="price" style="width:200px;">
          </select>

        </div>
      </div>
     

  <div class="form-group">

            <div class="col-sm-12">
<label class="control-label col-sm-2">Barcode Quantity</label>
              <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty" style="width: 200px;">


   <br>
   <br>
    
    </div>
  </div>
        <center><button type="submit" class="btn btn-default">Submit</button>
          <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a>  </center>

  </form>
 


</body>
</html>