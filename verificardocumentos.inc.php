<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$usuario=$_GET["nombrec"];

include "conexion.inc.php";
	$sql="UPDATE `seguimiento` SET `proceso`='P4' WHERE usuario='$usuario'";
	$resultado=mysqli_query($conn,$sql);
?>
<h1> INGRESAR DOCUMENTOS Y BOLETA de DEPOSITO</h1>

   CI <input name="ci" type="text" /></br>
   Nombre <input name="nombre" type="text" /></br>
   Paterno<input name="paterno" type="text" /></br>
   Materno <input name="materno" type="text" /></br>
   Boleta de deposito<input name="boleta" type="file" /></br>
   Foto<input name="foto" type="file" /></br>
   
<h1>Si lleno correctamente, pulse siguiente:</h1>

