<html>
<head>
 <!-- <?
  //  require_once("connect.php");
  //  $sql = "SELECT * FROM `pername` order by `per_id`";  
  // $result_pername=$conn->query($sql); 

  //  $sql2 ="SELECT * FROM provinces order by PROVINCE_ID";
  //    $result_province =$conn->query($sql2); 

  //   $sql3 ="SELECT * FROM zipcode";
  //   $result_zipcode = $conn->query($sql3);


 ?> -->

<title>เพิ่มข้อมูลสินค้า</title>
<link rel="icon" type="img/png" href="08bd1.png"/>
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
  <script type="text/javascript" src="/phpexcel/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link href="/phpexcel/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>




<style>
    label {
      color : #000000;
      font-family: 'Sriracha', cursive;

      }
    body {
      background-color: #aee0ee;
      background: linear-gradient(135deg, #bbfcde 5%, #ffccff 50%);
    }
    h2{
      color:#000000;
    }
    .neumorphic {
      border-radius: 1rem;
      background: var(--color);
      -webkit-animation: 1s -.3s 1 paused opacify;
      animation: 1s -.3s 1 paused opacify;
      -webkit-backdrop-filter: blur(1.5rem);
      backdrop-filter: blur(1.5rem);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: -0.25rem -0.25rem 0.5rem rgba(255, 255, 255, 0.07), 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.12), -0.75rem -0.75rem 1.75rem rgba(255, 255, 255, 0.07), 0.75rem 0.75rem 1.75rem rgba(0, 0, 0, 0.12), inset 8rem 8rem 8rem rgba(0, 0, 0, 0.05), inset -8rem -8rem 8rem rgba(255, 255, 255, 0.05);
    }
    @-webkit-keyframes opacify {
      to {
        background: transparent;
      }
    }
    @keyframes opacify {
      to {
        background: transparent;
      }
    }
    card {
      position: absolute;
      top: 50vh;
      left: 50vw;
      width: 400px;
      height: 300px;
      max-width: 80vw;
      max-height: 80vh;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      box-sizing: border-box;
      padding: .5rem;
    /* color:#d9d9d9; 
      color:#aee0ee; */
    }
    .neumorphic{
      --color: hsl(210deg,10%,30%);
      background: #aee0ee;
    }
    .file-upload {
  
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100px;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
   margin-left: 10%;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
  </style> 
</head>
<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});
$(function() {
    
    $('#id_category').change(function() {
      //  alert('test');
                      $.ajax({
                          type: 'POST',
                          data: {id_category: $(this).val()},
                          url: 'select_type.php',
                          success: function(data) {
                          //alert("data : ",data);
                        $('#type_id').html(data);     
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

  $(function() {
    
    $('#type_id').change(function() {
      //  alert('test');
                      $.ajax({
                          type: 'POST',
                          data: {type_id: $(this).val()},
                          url: 'select_brand.php',
                          success: function(data) {
                          //alert("data : ",data);
                        $('#brand_id').html(data);     
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

  $(function() {
    
    $('#type_id').change(function() {
      //  alert('test');
                      $.ajax({
                          type: 'POST',
                          data: {type_id: $(this).val()},
                          url: 'select_format.php',
                          success: function(data) {
                          //alert("data : ",data);
                        $('#format_id').html(data);     
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


<body>
  <?php
  	require("connect.php");
	
    $sql = "SELECT * FROM category order by id_category";  
    $result_category=$conn->query($sql); 
  
  
  ?>
<div class="container">
    <card class="neumorphic" style="margin-top:-250px;height:100px;margin-left:5%;">
      <center><h2 style="font-family: 'Sriracha', cursive;">เพิ่มข้อมูลสินค้า</h2></center>
    </card>
    <card class="neumorphic" style="width:1000px;margin-left:5%;height:500px;margin-top:60px;" >
      <form autocomplete="off" class="form-horizontal"  action="insert_product.php" target="_blank" method="POST" enctype="multipart/form-data">
        <div class="col-md-12">
          <div class="row">
          <label class="control-label" style="margin-left:30px;">ประเภทสินค้า :</label>
                            <select class="form-control col-md-2" name="id_category" id="id_category" style="width:300px;margin-left:30px;">
                            <option>--เลื่อกประเภทสินค้า--</option>
      <?php
  while($row = $result_category->fetch_assoc())
  { ?>
      <option value="<?=$row['id_category'];?>"> <?=$row['cateory_name'];?> </option>  
 <?php } ?>  
   
                            </select>    
                                 



            <label for="tokename" style="margin-left:20px">ชนิด :</label>
            <select class="form-control col-md-2" name="type_id" id="type_id" style="width:300px;margin-left:30px;">
                                
                            </select>   
            
            <label class="control-label col-sm-2"> จำนวน:</label>
            <input type="text" id="qty" name="qty" class=" form-control control-label col-md-2" style="width: 200px;margin-left:-80px" require>

         
    </div>
    </div>
    <div>
    <br>
      </div>
      <div>
      <br>
      <div class="row">      
        <label style="margin-left:2%;" for="dtp_input1" class="col-md-2 control-label">ยี่ห้อ:</label>
        
        <select class="form-control col-md-2" name="brand_id" id="brand_id" style="width:300px;margin-left:-10%;">
                                
                                </select>   
          <label class="control-label" style="margin-left:30px;">รูปแบบ :</label>
                            <select class="form-control col-md-2" name="format_id" id="format_id" style="width:300px;margin-left:30px;">
                                
                            </select> 
        <label class="control-label" style="margin-left:30px;">หน่วย :</label>
        <input type="text" id="unit_name" name="unit_name" class=" form-control control-label col-md-2" style="width: 200px;margin-left: 10px">
        
      </div>  

     
      <div class="row" style="margin-top:30px; ">
      <label class="control-label" style="margin-left:30px;">ชือสินค้า :</label>
             <input class="form-control col-md-2" name="name_product" id="name_product" style="width:300px;margin-left:30px;">
                                
            
             <label style="margin-left:2%;" for="dtp_input1">ราคา:</label>
             
        <input class="form-control"  id="price" name="price" type="text" value="" style="width:100px;margin-left:10px;">
        
         
        <label style="margin-left:2%;" for="dtp_input1">product_code:</label>
             
             <input class="form-control"  id="product_code" name="product_code" type="text" value="" style="width:150px;margin-left:10px;"> 
        
        <button class="file-upload-btn col-md-2" type="button"  onclick="$('.file-upload-input').trigger( 'click' )" style="margin-left:10px;">รูปสินค้า</button>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
 

  <div class="image-upload-wrap">
    <input class="file-upload-input"  id="img_product" name="img_product" type="file" onchange="readURL(this);"  accept="image/*"/>
    <div class="drag-text">
      <h3>ลากรูปลงที่นี้</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">ลบ <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>

</div>
<button class="col-md-2" type="submit"  style="width:100px;color: #fff;background: #1FB264;border: none;padding: 10px;border-radius: 4px;border-bottom: 4px solid #15824B;transition: all .2s ease;outline: none;text-transform: uppercase;font-weight: 700;margin-left:40%;">บันทึก</button>
      </div>   

      
      <!-- <script>

        function insertdata(){
         var id_category = document.getElementById('id_category').value;
         var type_id = document.getElementById('type_id').value;
         var qty = document.getElementById('qty').value;
         var brand_id = document.getElementById('brand_id').value;
         var format_id =document.getElementById('format_id').value;
         var unit_name =document.getElementById('unit_name').value;
         var name_product =document.getElementById('name_product').value; 
         var price =document.getElementById('price').value; 

        var fd = new FormData();
        var files = $('#img_product')[0].files[0];
        fd.append('file',files);
        //  var img_product =document.getElementById('img_product').value;
         var product_code =document.getElementById('product_code').value
         
         
         console.log(id_category);
         console.log(type_id);
         console.log(qty);
         console.log(brand_id);
         console.log(format_id);
         console.log(unit_name);
         console.log(name_product);   
         console.log(price);
         console.log(fd);
         console.log(product_code);
         
         $.ajax({
                          type: 'POST',
                          data: {id_category:id_category,type_id:type_id,qty:qty,
                            brand_id:brand_id,
                            format_id:format_id,
                            unit_name:unit_name,
                            name_product:name_product,
                            price:price,img_product:fd,product_code:product_code
                          },
                        
                          url: 'insert_product.php',
                          success: function(data) {
                            Swal.fire(
                            'Good job!',
                          'You clicked the button!',
                          'success'
                              )
                
                          },
              error: function(jqXHR, text, error){
                    
          }
                      });
        
        }


        </script> -->
      </div>
    </form>
  </card>
</body>
</html>