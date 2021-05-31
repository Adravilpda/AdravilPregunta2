<h1> PASO 6 CONFIRMAR DATOS ESTUDIANTE</h1>

<?PHP
$rol=$_GET["rol"];
$nombre=$_GET["nombrec"];

if($rol=='U'||$rol=='K'){
	
	include "conexion.inc.php";
	$sqlk="select * from flujoproceso.alumnosinformatica where nombre='$nombre'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$ci=$fila['ci'];
	echo "POR FAVOR VERIFICA TU INFORMACION"."<br>";
	
	echo "ci:       ".$fila[1]."<br>";
	echo "nombre:   ".$fila[2]."<br>";
	echo "paterno 	".$fila[3]."<br>";
	echo "materno 	".$fila[4]."<br>";
	echo "boleta  	".$fila[5]."<br>";
	echo "foto    	".$fila[6]."<br>";
	//LISTAR DOCUMENTOS DE ESTUDIANTE
}
else{
	echo "Error de visualizacion";
	
}
?>
<input name="ci" value="<?php echo $ci;?>" type="hidden" />