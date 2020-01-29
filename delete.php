<?php
	ob_start();
	session_start();

	$Line = $_GET["Line"];
	$_SESSION["strProductCODE"][$Line] = "";
	$_SESSION["strQty"][$Line] = "";

	header("location:form_shoping.php");
?>