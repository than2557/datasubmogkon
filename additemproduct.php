<html>
<head>
 <?
   require_once("connect.php");
   $sql = "SELECT * FROM category order by id_category";  
  $result_category=$conn->query($sql); 




 ?>

<title>เพิ่มข้อมูลสินค้า</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">

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

        input:red{
          text-align: left;
          text-decoration-color: #000000;
          width: 30%;

        }

       #product_code[disabled] {

            background-color: yellow;
              text-align: right;

        }
       /* div{
           background-color: #66b3ff;

        }*/
    </style>
</head>
<br>



        
<script type="text/javascript">
  
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
</script>





<script type="text/javascript">

$(function() {
    


  $('#type_id').change(function() {
   // alert('test');
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
</script>

<script type="text/javascript">

$(function() {
    


  $('#type_id').change(function() {
    //alert('test');
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



<!--<script type="text/javascript">
$(function() {
    
  $('form').submit(function() {
    alert('submit');

    var formID =$(this).attr('id');
    var formDetails = $('#'+formID);
    alert(formDetails);
                    $.ajax({
                        type: "POST",
                        url: 'insertproduct.php',
                         data:formDetails.serialize(),
                        success: function(data) {
                  alert("data : ",data);
                      $('#results').html(data);     
                        },
            error: function(jqXHR, text, error){
            // Displaying if there are any errors
                  $('#results').html(error);           
        }
                    });
                    return false;
                });
});
</script>-->


<script type="text/javascript">
function JSalert(){
  const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
}
</script>







<body style="background-color:  #b3ecff;">


    <!--<div style="width: 100%; height:720px; ;background-color: #b3ecff; ">-->
  <div class="container" style="width: 500px;background-color:   #66a3ff;">
  <div class="container" style="width: 100%;">
            <h2>เพิ่มข้อมูลสินค้า</h2>
       
        </div>  
      </div>
<div>

<br>
<br>
<div class="container" style="width: 100%;background-color: #66b3ff;border-bottom: 3%;border: 5px solid #000000">
  <div class="container" style="width:100%;background-color:#b3d9ff; border-radius: 2%;border-bottom: 3%;">

    <form class="form-horizontal"  action="insert_product.php"   method="POST" enctype="multipart/form-data" id="form">
   <div class="form-group">

    <div class="col-sm-12">
      <br>
  <label class="control-label col-sm-2" for="typeproduct">ประเภทสินค้า :</label>

     <select  class="form-control col-md-1" id="id_category" name="id_category"  style="width:200px;">
           <option>--เลื่อกประเภทสินค้า--</option>
      <?php
  while($row = $result_category->fetch_assoc())
  { ?>  
      <option value="<?=$row['id_category'];?>"> <?=$row['cateory_name'];?> </option>  
 <?php } ?>  

     </select>

  


    </div>

             <div class="col-sm-12">
        
          

     <label class="control-label col-sm-2">ชนิด:</label>
        <select class="form-control col-md-1"  id="type_id" name="type_id" style="width:200px;">
         
  

     </select>

  <label class="control-label col-sm-1">จำนวน:</label>
          <input type="text" class="form-control col-sm-1" name="qty" id="qty" style="width:100px;">
      


    </div>

   </div>

    <div class="form-group">

            <div class="col-sm-12">
               <label class="control-label col-sm-2">ยี่ห้อ:</label>
        <select class="form-control col-md-5  " id="brand_id" name="brand_id"  style="width:200px; ">
      

 </select>

     <label class="control-label col-sm-1" >รูปแบบ:</label>
        <select class="form-control col-md-1"  id="format_id" name="format_id" style="width:150px;">
       
     </select>
      <label class="control-label col-sm-1">หน่วย:</label>
         <input type="text" class="form-control col-sm-1" id="unit_name" name="unit_name" style="width: 100px;">
    </div>
   </div>

<div class="form-group">
   <div class="col-sm-12">
      <label class="control-label col-sm-2">ชือสินค้า:</label>
        <input type="text"  class="form-control col-sm-1" name="name_product" id="name_product" style="width:200px;">

        <label class="control-label col-sm-1" >ราคา :</label>
        <input type="text"  class="form-control col-md-2"  id="price" name="price" style="width:100px;">
        <label class="control-label col-sm-1" >รูปสินค้า:</label>
         <input type="file"  class="form-control col-md-2"  id="img_product" name="img_product" style="width:200px;">

<div class="form-group">
  <div class="col-sm-12">
     <label class="control-label col-sm-2"> โคดสินค้า:</label>
     <input type="text"  class="form-control col-md-2"  id="product_code" name="product_code" style="width:200px;">
    </div>
  </div>



</div>

      <div>

       <center><button type="submit" class="btn btn-primary" style="width:15%" >เพิ่มข้อมูล</button></center>

       <br>

       <center><button  class="btn btn-primary" style="width:15%"><a style="color: white;" href="index.php">กลับหน้าหลัก</a></button></center>



       
        </div>

        <br>
        </div>

    </form>



        </div>  
  

</body>
</html>