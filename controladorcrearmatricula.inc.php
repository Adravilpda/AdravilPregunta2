<?php
$ci=$_GET["ci"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];	
	include "conexion.inc.php";
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P6'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P8'";
	}

?>