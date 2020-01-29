<?php
session_start();

mysql_connect("localhost","root","123456789");
mysql_select_db("datasubmongkon");
date_default_timezone_set("Asia/Bangkok");

$qwe = $_SESSION["strProductCODE"][$i];
$sql = "SELECT * FROM product_stock  ";
$objQuery = mysql_query($sql)  or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);

echo $sql2;
print_r($objResult2);

	//$csql= 0;
  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orderstock (OrderDate,Name,status)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','0') 
  ";
  mysql_query($strSQL) or die(mysql_error());

  $strOrderID = mysql_insert_id();

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductCODE"][$i] != "")
	  {
	  			
			///อยู่ใน loop	
		$sql2 = "SELECT * FROM product_stock WHERE product_code = '".$_SESSION["strProductCODE"][$i]."' ";
		$objQuery2 = mysql_query($sql2)  or die(mysql_error());
		$objResult2 = mysql_fetch_array($objQuery2);


				 $strSQL = "
				INSERT INTO orderstock_detail (Orderstock_ID,product_code,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductCODE"][$i]."','".$_SESSION["strQty"][$i]."') 
			  ";
			  mysql_query($strSQL) or die(mysql_error());

			  	
			  /*	$csql = $objResult2["qty"]-$_SESSION["strQty"][$i];
			  	


			  	echo $objResult2["qty"];*/

			 	
			 /*$sqlk ="UPDATE product_stock SET qty='$csql' WHERE product_code = '".$_SESSION["strProductCODE"][$i]."' ";

			 mysql_query($sqlk) or die(mysql_error());*/

			  
	  }
  }
		

mysql_close();
//session_destroy();
unset($_SESSION["strProductCODE"]);
header("location:finish_orderstock.php?Order_ID=".$strOrderID);
?>