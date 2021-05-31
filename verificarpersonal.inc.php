<h1> Verificar Datos Personales KARDIXTA</h1>


<?PHP
$rol=$_GET["rol"];
$nombre=$_GET["nombrec"];
include "conexion.inc.php";
	$sql="UPDATE `seguimiento` SET `proceso`='P5' WHERE usuario='$usuario'";
	$resultado=mysqli_query($conn,$sql);
	
if($rol=='U'){
	echo "Solo los Kardixtas pueden ver esta seccion";
}
else{
	echo "Documentos del ESTUDIANTE: ".$nombre;
	include "conexion.inc.php";
	$sqlk="select * from flujoproceso.alumnosinformatica where nombre='$nombre'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	echo "<br>";
	echo "ci      	:".$fila[1]."<br>";
	echo "nombre	: ".$fila[2]."<br>";
	echo "paterno	: ".$fila[3]."<br>";
	echo "materno	: ".$fila[4]."<br>";
	echo "boleta	:  ".$fila[5]."<br>";
	echo "foto		:  ".$fila[6]."<br>";

}


?>
	
 
