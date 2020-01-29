<html>
<head>
<title>submongkon</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <title>submonkon</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

        input{
          text-align: left;
          text-decoration-color: #000000;
          width: 30%;

        }
       /* div{
           background-color: #66b3ff;

        }*/

        td{

          text-align: left;
        }

    </style>
</head>
<body onLoad="window.print()">
<?php
mysql_connect("localhost","root","123456789");
mysql_select_db("datasubmongkon");

$strSQL = "SELECT * FROM orders WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
date_default_timezone_set("Asia/Bangkok");
$sss = $objResult["OrderDate"];
 function DateThai($strDate)
  {
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
  }
?>


<br>
 <center><table   style="width: 50%" width="304" border="1" class="table table-striped">
    <tr>
      <td width="71">รหัสการขาย</td>
      <td width="80">
	  <?php echo $objResult["OrderID"];?></td>
    </tr>
    <tr>
      <td width="71">ชื่อลูกค้า</td>
      <td width="80">
	  <?php echo $objResult["Name"];?></td>
  </tr>
    <tr>
    <td width="80">วัน/เวลาการซื้อ</td>
 
    <td width="80"><?php echo DateThai($sss);?> น.</td>

    </tr>
    
  </table></center>

  <br>

<center><table width="400"  border="1" style="width: 50%;text-align: left;" class="table table-striped" >
  <tr>
    <td width="101">รหัสสินค้า</td>
    <td width="82">ชื่อสินค้า</td>
    <td width="82">ราคา</td>
    <td width="79">จำนวน</td>
    <td width="79">รวม</td>
  
  </tr>
<?php

$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM orders_detail WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery2 = mysql_query($strSQL2)  or die(mysql_error());

while($objResult2 = mysql_fetch_array($objQuery2))
{
		$strSQL3 = "SELECT * FROM product_stock WHERE product_code = '".$objResult2["product_code"]."' ";

		$objQuery3 = mysql_query($strSQL3)  or die(mysql_error());
		$objResult3 = mysql_fetch_array($objQuery3);
		$Total = $objResult2["Qty"] * $objResult3["price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?php echo $objResult2["product_code"];?></td>
		<td><?php echo $objResult3["name_product"];?></td>
		<td style="text-align:right;"><?php echo $objResult3["price"];?></td>
		<td style="text-align: right;"><?php echo $objResult2["Qty"];?></td>
		<td style="text-align: right;"><?php echo number_format($Total,2);?></td>
   
	  </tr>
	  <?php
 }
  ?>
</table></center>
<center>Sum Total <?php echo number_format($SumTotal,2);?></center>
 
<center><a class="btn btn-primary" href="index.php">กลับหน้าหลัก</a></center>

<?php
mysql_close();
?>
</body>
</html>