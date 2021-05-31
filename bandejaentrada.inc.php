<h1> BANDEJA Verificar Documentos Estudiante</h1>

<?PHP
$rol=$_GET["rol"];
$nombre=$_GET["nombrec"];
if($rol=='U'||$rol=='K'){
	
	include "conexion.inc.php";
	$sqlk="select * from flujoproceso.alumnosinformatica where nombre='$nombre'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$ci=$fila['ci'];
	echo "POR FAVOR VERIFICA TU INFORMACION";
	echo $ci;
	//LISTAR DOCUMENTOS DE ESTUDIANTE
}
else{
	echo "Error de visualizacion";
	
}


?>
<input name="ci" value="<?php echo $ci;?>" type="hidden" />