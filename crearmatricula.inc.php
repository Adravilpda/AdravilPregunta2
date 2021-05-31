<h1> PASO 7 CREAR MATRICULA</h1>

<?PHP
$rol=$_GET["rol"];
$nombre=$_GET["nombrec"];
if($rol=='U'){
	echo "Solo los kardixtas pueden ver esta seccion";
}
else{
	include "conexion.inc.php";
	$sqlk="select * from flujoproceso.alumnosinformatica where nombre='$nombre'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$ci=$fila['ci'];
	echo "PROCEDER A CREAR MATRICULA CON DATOS DEL ESTUDIANTE"."<br>";
	echo "idMatricula: "."<br>";
	echo "ci: ".$ci."<br>";
	echo "Codigo Universitario: "."<br>";
	echo "Foto: ".$ci."<br>";
	echo "Fecha Creacion: "."<br>";
	//LISTAR DOCUMENTOS DE ESTUDIANTE
	
}


?>
