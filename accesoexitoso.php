<h1>Comprobando Acceso</h1>
<?php

if(isset($_GET["nombrec"])){
$nombre=$_GET["nombrec"];
	include "conexion.inc.php";
	$sql="select * from alumnos where nombre='$nombre'";
	$resultado=mysqli_query($conn,$sql);
	$fila=mysqli_fetch_array($resultado);
	$user=$fila['nombre'];
	echo "Su nombre es:".$user;
	if($user!=NULL){
?>
	<form action="motor.php" method="GET">
	<input type="hidden" value="<?php echo $nombre;?>" name="nombrec"/>
	<input type="hidden" value="F1" name="flujo"/>
	<input type="hidden" value="P3" name="proceso"/>
	<input type="hidden" value="U" name="rol"/>
	Confirmar<input type="submit" name="enviar"/>
	</form>
<?php
	}
	else{
	echo "No se encuentra esa cuenta";}
}


?>
	



