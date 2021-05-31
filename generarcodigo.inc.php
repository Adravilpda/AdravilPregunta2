<h1>GENERAR CODIGO</H1>
<h2>Su codigo es:</h2>
<?php
$tramite=100;
$fin="no termino";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$usuario=$_GET["nombrec"];
$dateini=date("Y");
$horaini=date("H.i.s");
$codigo=rand(5000000, 10000000);
echo $codigo;



include "conexion.inc.php";
	
	$sql="insert into flujoproceso.seguimiento values ('$usuario','$flujo','$proceso','$tramite',$dateini,$dateini)";
	$resultado=mysqli_query($conn,$sql);
?>
<h2>Tiempo restante para depositar:24 horas</h2>
