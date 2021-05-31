<?php
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$rol='U';
if($ci==NULL || $nombre==NULL || $apellido==NULL){
	//echo "<script>alert('No se guardan datos vacios');</script>";
	//header("Location:crearcuenta.php");
}
else{
	include "conexion.inc.php";
	$sql="insert into flujoproceso.alumnos values ('$ci','$rol','$nombre','$apellido')";
	$resultado=mysqli_query($conn,$sql);
}
header("Location:acceso.inc.php");


?>