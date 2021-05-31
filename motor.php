<html>
<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$usuario=$_GET["nombrec"];
$rolcuenta=$_GET["rol"];
echo "<h1>"."BIENVENIDO: ".$usuario."</h1>";
include "conexion.inc.php";
$sql="select * from flujoproceso where flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($resultado);
$procesoSiguiente=$fila['procesosiguiente'];
$rolCuenta=$fila['rol'];
$archivo=$fila['formulario'];

?>
<body>
<h1>PROCEDIMIENTO DE INSCRIPCION</h1>
<form action="controlador.php" method="GET" >
<?php

include $archivo; //pantalla actual
?>
<br/>
<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
<input type="hidden" value="<?php echo $rolCuenta;?>" name="rol"/>
<input type="hidden" value="<?php echo $procesoSiguiente;?>" name="procesoSiguiente"/>
<input type="hidden" value="<?php echo $usuario;?>" name="nombrec"/>
<input type="hidden" value="<?php echo $archivo;?>" name="archivo"/>
<input type="submit" value="Anterior" name="Anterior"/>
<input type="submit" value="Siguiente" name="Siguiente"/>
</form>
</body>
</html>