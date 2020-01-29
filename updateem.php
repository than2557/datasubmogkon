s  <html>
<head>
 <?
   require_once("connect.php");
    


    $em_id = $_GET['em_id'];
 $sql4 ="SELECT * FROM empolyee,provinces,districts,amphures,pername WHERE empolyee.AMPHUR_ID=amphures.AMPHUR_ID and empolyee.PROVINCE_ID=provinces.PROVINCE_ID and empolyee.DISTRICT_CODE=districts.DISTRICT_CODE and empolyee.per_id =pername.per_id and em_id=' $em_id'";
 

       $result_pro2=$conn->query($sql4); 
      $row_pro=$result_pro2->fetch_assoc();



   $sql = "SELECT * FROM `pername` order by `per_id`";  
  $result_pername=$conn->query($sql); 



   $sql2 ="SELECT * FROM provinces order by PROVINCE_ID";
     $result_province =$conn->query($sql2); 






 ?>

<title>เพิ่มข้อมูลพนักงาน</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
    
  $('#PROVINCE_ID').change(function() {
    //  alert('test');
                    $.ajax({
                        type: 'POST',
                        data: {PROVINCE_ID: $(this).val()},
                        url: 'select_amphur.php',
                        success: function(data) {
                        //alert("data : ",data);
                      $('#AMPHUR_ID').html(data);     
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
    


  $('#AMPHUR_ID').change(function() {
   // alert('test');
                    $.ajax({
                        type: 'POST',
                        data: {AMPHUR_ID: $(this).val()},
                        url: 'select_district.php',
                        success: function(data) {
                        //alert("data : ",data);
                       $('#DISTRICT_ID').html(data);     
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
    


  $('#DISTRICT_ID').change(function() {
   alert('test');
                    $.ajax({
                        type: 'POST',
                        data: {DISTRICT_CODE: $(this).val()},
                        url: 'select_zipcode.php',
                        success: function(data) {
                       //alert("data : ",DISTRICT_CODE);

                       $('#zipcode').html(data);  

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
            <h2>เพิ่มข้อมูลพนักงาน</h2>
       
        </div>  
      </div>
<div>

<br>
<br>
<div class="container" style="width: 100%;background-color: #66b3ff;border-bottom: 3%;border: 5px solid #000000">
  <div class="container" style="width:100%;background-color:#b3d9ff; border-radius: 2%;border-bottom: 3%;">

    <form class="form-horizontal"  action="update_em.php"   method="POST" enctype="multipart/form-data" id="form">
   <div class="form-group">

    <div class="col-sm-12">
      <br>
    <input type="text" name="em_id" id="em_id" value="<?=$row_pro['em_id'];?>" hidden>
  <label class="control-label col-sm-2" for="typeproduct"> คำนำหน้าชื่อ:</label>

     <select  class="form-control col-md-1" id="per_id" name="per_id"  style="width:200px;">
           <option value="<?=$row_pro['per_id'];?>"><?=$row_pro['per_name'];?></option>
      <?php
  while($row = $result_pername->fetch_assoc())
  { ?>  
      <option value="<?=$row['per_id'];?>"> <?=$row['per_name'];?> </option>  
 <?php } ?>  

     </select>

  <label class="control-label col-sm-1">ชื่อ:</label>
    <input type="text" name="name" id="name" value="<?= $row_pro['name'];?>" class="form-control col-sm-1" style="width: 150px">

    </div>

             <div class="col-sm-12">
        
          

     <label class="control-label col-sm-2">จังหวัด:</label>
        <select class="form-control col-md-1"  id="PROVINCE_ID" name="PROVINCE_ID" style="width:200px;">
          <option value="<?=$row_pro['PROVINCE_ID'];?>"><?=$row_pro['PROVINCE_NAME'];?>         <?php
  while($row = $result_province->fetch_assoc())
  { ?>  
      <option value="<?=$row['PROVINCE_ID'];?>"> <?=$row['PROVINCE_NAME'];?> </option>  
 <?php } ?>  

  

     </select>

  <label class="control-label col-sm-1">อำเภอ:</label>
          <select type="text" class="form-control col-sm-1" name="AMPHUR_ID" id="AMPHUR_ID" style="width:150px;" >
            <option value="<?=$row_pro['AMPHUR_ID'];?>"><?=$row_pro['AMPHUR_NAME'];?></option>
</select>

    </div>

   </div>

    <div class="form-group">

            <div class="col-sm-12">
               <label class="control-label col-sm-2">ตำบล:</label>
        <select class="form-control col-md-5  " id="DISTRICT_ID" name="DISTRICT_ID"  style="width:200px;">
          <option value="<?=$row_pro['DISTRICT_CODE'];?>"><?=$row_pro['DISTRICT_NAME'];?></option>
      

 </select>

      <label class="control-label col-md-1">รหัสไปรษณีย์:</label>

   <input type="text" name="zipcode" id="zipcode" class="form-control col-md-1"  style="width: 200px">
       



      <div class="form-group">

            <div class="col-sm-12">
               <label class="control-label col-sm-2">ชื่อผู้ใช้:</label>
        <input  type="text" value="<?=$row_pro['username'];?>" class=" form-control control-label col-md-1"  id="username" name="username" style="width: 200px"></label>
        

      

 </select>

      <label class="control-label col-md-1" for="zipcode">รหัสผ่าน:</label>
      <input  type="password" class=" form-control control-label col-md-1"  id="password" name="password" value="<?=$row_pro['password'];?>" style="width: 200px"></label> 


    
      



    </div>
   </div>
      




      <label class="control-label col-sm-2">ที่อยู่:</label>
         <input type="text" class="form-control col-sm-" id="address" name="address"  style="width: 100px;" value="<?=$row_pro['address'];?>">
          
     
    </div>
   </div>

<div class="form-group">
   <div class="col-sm-12">
     <label class="control-label col-sm-2" >รูป:</label>
         <input type="file"  class="form-control col-md-2"  id="img_product" name="img_product" style="width:200px;">
          

      <label class="control-label col-sm-1">เบอร์ติดต่อ:</label>
        <input type="text" value="<?=$row_pro['tel'];?>" class="form-control col-sm-1" name="tel" id="tel" style="width:200px;">

   


       
       




</div>

      <div>

       <center><button type="submit" class="btn btn-primary" style="width:15%" >เพิ่มข้อมูล</button></center>

       <br>

       <center><button  class="btn btn-primary" style="width:15%"><a style="color: white;" href="index_admin.php">กลับหน้าหลัก</a></button></center>



    


        </div>

        <br>
        </div>

    </form>



        </div>  
  

</body>
</html>