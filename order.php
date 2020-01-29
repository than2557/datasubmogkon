<?php
ob_start();
session_start();
	
if(!isset($_SESSION["intLine"]))
{ 

	$_SESSION["meqty"] += 1;

	 $_SESSION["intLine"] = 0;
	 $_SESSION["strProductCODE"][0] = $_GET["product_code"];
	 $_SESSION["strQty"][0] = 1;

	 header("location:form_shoping.php");
}
else
{
	
	$key = array_search($_GET["product_code"], $_SESSION["strProductCODE"]);
	if((string)$key != "")
	{
		 $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
		  $_SESSION["meqty"] += 1;
	}
	else
	{
		
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strProductCODE"][$intNewLine] = $_GET["product_code"];
		 $_SESSION["strQty"][$intNewLine] = 1;
		 $_SESSION["meqty"] += 1;
	}
	
	 header("location:form_shoping.php");

}
?>