<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$materno=$_GET["materno"];
$boleta=$_GET["boleta"];
$foto=$_GET["foto"];
if($ci==NULL || $nombre==NULL){
	//echo "<script>alert('No se guardan datos vacios');</script>";
	//header("Location:crearcuenta.php");
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P5'";
	}
}
else{
	include "conexion.inc.php";
	$sqla="insert into flujoproceso.alumnosinformatica values ('','$ci','$nombre','$paterno','$materno','$boleta','$foto')";
	$resultadoa=mysqli_query($conn,$sqla);
	
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P5'";
	}
}


?>


