<!DOCTYPE html>
<html>
<head>
	<title>เข้าสู๋ระบบ</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
.a{color: white; width:}


</style>
<script type="text/javascript">

$(function() {
    
  $('form').submit(function() {
    alert('submit');
    var formID =$(this).attr('id');
    var formDetails = $('#'+formID);
    
                    $.ajax({
                        type: "POST",
                        url: 'login.php',
                         data:formDetails.serialize(),
                        success: function(data) {
              //        alert("data : ",data);
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
</script>
</head>
<body>
  <?php
    require_once("connect.php");




?>
 <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="regis">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>เข้าสู่ระบบ</b></h4>
      
      <form method="post" action="login.php" name="form" id="form" >
        <div class="w3-section">
      
        <div class="w3-section">
          <label>ชื่อผู้ใช้</label>
          <input class="w3-input w3-border" type="text" name="username" id="username" required>
        </div>
        <div class="w3-section">
          <label>รหัสผ่าน</label>
          <input class="w3-input w3-border" type="password" name="password" id="password" required>
        </div>
     
          

        <br><button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">เข้าสู่ระบบ</button><br>


      </form>
    </div>
  </div>
 <center><a href="index.php" data-toggle="tooltip" title="Visit w3schools"><button type="submit" class="btn btn-success">กลับหน้าหลัก</button></a><center>
</body>
<div id="results"></div>
</html>