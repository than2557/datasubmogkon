  <html>
<head>


<title>เพิ่มข้อมูลพนักงาน</title>
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
  <link rel="stylesheet" href="/resources/demos/style.css">
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
      background: linear-gradient(135deg, #0398fc 5%, #f4f5b0 50%);
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

@import url("https://fonts.googleapis.com/css?family=Rubik:700&display=swap");
* {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
}



button {
  position: relative;
  display: inline-block;
  cursor: pointer;
  outline: none;
  border: 0;
  vertical-align: middle;
  text-decoration: none;
  font-size: inherit;
  font-family: inherit;
}
button.learn-more {
  font-weight: 600;
  color: #382b22;
  text-transform: uppercase;
  padding: 1.25em 2em;
  background: #fff0f0;
  border: 2px solid #b18597;
  border-radius: 0.75em;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  transition: background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
  transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1);
  transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
}
button.learn-more::before {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #f9c4d2;
  border-radius: inherit;
  box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
  -webkit-transform: translate3d(0, 0.75em, -1em);
          transform: translate3d(0, 0.75em, -1em);
  transition: box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
  transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
  transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
}
button.learn-more:hover {
  background: #ffe9e9;
  -webkit-transform: translate(0, 0.25em);
          transform: translate(0, 0.25em);
}
button.learn-more:hover::before {
  box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
  -webkit-transform: translate3d(0, 0.5em, -1em);
          transform: translate3d(0, 0.5em, -1em);
}
button.learn-more:active {
  background: #ffe9e9;
  -webkit-transform: translate(0em, 0.75em);
          transform: translate(0em, 0.75em);
}
button.learn-more:active::before {
  box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
  -webkit-transform: translate3d(0, 0, -1em);
          transform: translate3d(0, 0, -1em);
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


  $(function() {
    


    $('#DISTRICT_ID').change(function() {
     
      Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
                      $.ajax({
                          type: 'POST',
                          data: {DISTRICT_CODE: $(this).val()},
                          url: 'select_zipcode.php',
                          success: function(data) {
                         //alert("data : ",DISTRICT_CODE);
                         $('#zipcode').val(data);  
  
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

<?php
require_once("connect.php");
$sql = "SELECT * FROM `pername` order by `id_pername`";  
$result_pername=$conn->query($sql); 

$sql2 ="SELECT * FROM provinces WHERE PROVINCE_ID=5";
$result_province =$conn->query($sql2);

?>
<body>
<div class="container" >
    <card class="neumorphic" style="margin-top:-250px;height:100px;margin-left:5%;">
      <center><h2 style="font-family: 'Sriracha', cursive;">เพิ่มข้อมูลพนักงาน</h2></center>
    </card>
    <card class="neumorphic" style="width:1000px;margin-left:5%;height:500px;margin-top:60px;" >
      <form autocomplete="off" class="form-horizontal">
        <div class="col-md-12">
          <div class="row">
          <label class="control-label" style="margin-left:30px;">คำนำหน้าชื่อ :</label>
                            <select class="form-control col-md-2" name="pername" id="pername" style="width:300px;margin-left:30px;">
                            <option>--เลื่อกคำนำหน้าชื่อ--</option>
                            <?php
                     while($row = $result_pername->fetch_assoc())
                      { ?>  
                      <option value="<?=$row['id_pername'];?>"> <?=$row['pername'];?> </option>  
                  <?php } ?>   
                            </select>    
                                 
            <label for="name" style="margin-left:20px">ชื่อพนักงาน :</label>
            <input type="text"  class=" form-control control-label  text col-md-2" id="name" name="name" style="width:100px;margin-left:20px" require>
            
            <label class="control-label col-sm-2"> นามสกุล:</label>
            <input type="text" id="postname" name="postname" class=" form-control control-label col-md-2" style="width: 200px;margin-left:-80px" require>

         
    </div>
    </div>
    <div>
<br>
  <div class="row">
  <label for="username" style="margin-left:20px">ชื่อผู้ใช้ :</label>
            <input type="text"  class=" form-control control-label  text col-md-2" id="username" name="username" style="width:100px;margin-left:20px" require>
            
            <label class="control-label col-sm-2"> รหัส:</label>
            <input type="password" id="password" name="password" class=" form-control control-label col-md-2" style="width: 200px;margin-left:-80px" require>
            <label class="control-label col-sm-2"> เบอร์ติดต่อ:</label>
            <input type="text" id="tel" name="tel" class=" form-control control-label col-md-2" style="width: 200px;margin-left:-80px" require>
  </div>
      </div>
      <div>
      <br>
      <div class="row">      
        <label style="margin-left:2%;" for="dtp_input1" class="col-md-2 control-label">ที่อยู่:</label>
        
          <input class="form-control" type="text" value="" style="width:200px;margin-left:-90px;" id="address" name="address" require>
          <label class="control-label" style="margin-left:30px;">จังหวัด :</label>

                         
          <select class="form-control col-md-2" name="PROVINCE_ID" id="PROVINCE_ID" style="width:300px;margin-left:30px;">
          <option>--เลือกจังหวัด--</option>
                            <?php
            while($row = $result_province->fetch_assoc())
        { ?>  
           <option value="<?=$row['PROVINCE_ID'];?>"> <?=$row['PROVINCE_NAME'];?> </option>  
          <?php } ?>   
                            </select> 
        <label class="control-label" style="margin-left:30px;">อำเภอ :</label>
             <select class="form-control col-md-2" name="AMPHUR_ID" id="AMPHUR_ID" style="width:300px;margin-left:30px;">
                                
             </select>       
        
      </div>  

     
      <div class="row" style="margin-top:30px; ">
      <label class="control-label" style="margin-left:30px;">ตำบล :</label>
             <select class="form-control col-md-2" name="DISTRICT_ID" id="DISTRICT_ID" style="width:300px;margin-left:30px;">
                                
             </select>  
             <label style="margin-left:2%;" for="dtp_input1">รหัสไปรษณีย์:</label>
             
        <input class="form-control" type="text" id="zipcode" name="zipcode" style="width:200px;margin-left:10px;"> 


       
        <button class="learn-more col-md-2" type="button" onclick="$('.file-upload-input').trigger( 'click' )" style="margin-left:2%;">รูปภาพพนักงาน</button>
        <button class="learn-more" type="button"  onclick="insertdata()" style="margin-left:2%;">บันทึกข้อมูล</button>
        <script>
        
        
        function insertdata(){
          Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
          var id_pername = document.getElementById("id_pername");
          var name = document.getElementById("name");
          var postname =  document.getElementById("postname");
          var address =  document.getElementById("address");
          var province_id =  document.getElementById("PROVINCE_ID");
          var amphur_id =  document.getElementById("AMPHUR_ID");
          var district_id =  document.getElementById("DISTRICT_ID");
          var zipcode =  document.getElementById("zipcode");
          var image =  document.getElementById("image");
          var username = document.getElementById("username");
          var password = document.getElementById("password");
          $.ajax({
                          type: 'POST',
                          data: { 
                            id_pername: id_pername, 
                          name: name,
                          postname:postname,
                          addres:addres, 
                          PROVINCE_ID :province_id ,
                          AMPHUR_ID:amphur_id,
                          DISTRICT_ID:district_id,
                          zipcode:zipcode,
                          image:image,
                          username:username,
                          password:password
                           },
                          url: 'insert_em.php',
                          success: function(data) {
                            Swal.fire(
            'Good job!',
          'You clicked the button!',
         'success'
                    )
                          },
              error: function(jqXHR, text, error){
              
                    $('#results').html(error);           
          }
                      });




        }
        
        
        
        </script>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
 

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' id="image" onchange="readURL(this);" accept="image/*" />
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
      </div>   

     
      </div>
    </form>
  </card>
</body>
</html>