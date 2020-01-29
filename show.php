<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="/bootstrap/js/bootstrap.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
    </style>




<title>show</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<br>

	<?php

if(!isset($_SESSION["intLine"]))
{
	echo "Cart empty";
	exit();
}

mysql_connect("localhost","root","123456789");
mysql_select_db("datasubmongkon");
?> 


<br>
<div class="container" style="width: 500px;background-color:   #66a3ff;">
  <div class="container" style="width: 100%;">
            <h2>ตะกร้าสินค้า</h2>
          
        </div>  
      </div>
      <br>
<center><table width="400"  border="1" class="table table-hover" style="width: 50%">
  <tr>
    <td width="101">รหัสสินค้า</td>
    <td width="82">ชื่อสินค้า</td>
    <td width="82">ราคา</td>
    <td width="79">จำนวน</td>
    <td width="79">ราคา</td>
    <td width="10">ลบ</td>
  </tr>
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductCODE"][$i] != "")
	  {
		$strSQL = "SELECT * FROM product_stock WHERE product_code = '".$_SESSION["strProductCODE"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?php echo $_SESSION["strProductCODE"][$i];?></td>
		<td><?php echo $objResult["name_product"];?></td>
		<td style="text-align: right;"><?php echo $objResult["price"];?> บาท</td>
		<td style="text-align: right;"><?php echo $_SESSION["strQty"][$i];?></td>
		<td style="text-align: right;"><?php echo number_format($Total,2);?> บาท</td>
		<td><a href="delete.php?Line=<?php echo $i;?>">x</a></td>

	  </tr>
	  <?php
	  }
  }
  ?>
</table></center>
<center>ราคารวม<?php echo number_format($SumTotal,2);?>
 บาท <br><br><a href="index_admin.php">หน้าแรก</a>
 

<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php">เช็คเอาท์</a></center>
<?php
	}
?>
<?php
mysql_close();
?>
</body>
</html>