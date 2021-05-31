<?php
$ci=$_GET["ci"];
$flujo=$_GET["flujo"];

if($ci==NULL){
	//echo "<script>alert('No se guardan datos vacios');</script>";
	//header("Location:crearcuenta.php");
}
else{
	include "conexion.inc.php";
	//$sqla="insert into flujoproceso.alumnosinformatica values ('$ci','$nombre','$paterno','$materno','$boleta','$foto')";
	//$resultadoa=mysqli_query($conn,$sqla);
	
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P7'";
}


?>