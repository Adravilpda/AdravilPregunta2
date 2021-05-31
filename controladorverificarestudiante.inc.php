<?php
$ci=$_GET["ci"];
$flujo=$_GET["flujo"];

if($ci==NULL){
	//echo "<script>alert('No se guardan datos vacios');</script>";
	//header("Location:crearcuenta.php");
	if(isset($_GET["Anterior"]))
	{//F1    P6   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P5'";
	}
}
else{
	include "conexion.inc.php";
	//$sqla="insert into flujoproceso.alumnosinformatica values ('$ci','$nombre','$paterno','$materno','$boleta','$foto')";
	//$resultadoa=mysqli_query($conn,$sqla);
	
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P7'";
	}
}


?>
