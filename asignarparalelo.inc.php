<?php
$usuario=$_GET["nombrec"];
echo "Alumno Actual: ".$usuario;

include "conexion.inc.php";
	$sqlk="select * from materias";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
	
?>
<h1>ASIGNAR PARALELO</h1>

<h3>Lista de Materias</h3>
<table border=1 width=400 height=50>
<tr>
	<td>Asignatura</td>
	<td>Inscritos</td>
	<td>Maximo</td>
	<td>Alumno Actual: <?php echo $usuario?></td>
	
</tr>
<tr>
	<td>Inf 111</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td><input type="submit" value="asignar" name="asignar"/></td>
	
</tr>
<tr>
	<td>Inf 112</td>
	<td>80</td>
	<td>100</td>
	<td><input type="submit" value="asignar" name="asignar"/></td>
</tr>
<tr>
	<td>Inf 113</td>
	<td>80</td>
	<td>100</td>
	<td><input type="submit" value="asignar" name="asignar"/></td>
</tr>
<tr>
	<td>Mat 114</td>
	<td>80</td>
	<td>100</td>
	<td><input type="submit" value="asignar" name="asignar"/></td>
</tr>
<tr>
	<td>Mat 115</td>
	<td>80</td>
	<td>100</td>
	<td><input type="submit" value="asignar" name="asignar"/></td>
</tr>
<tr>
	<td>Lin 116</td>
	<td>80</td>
	<td>100</td>
	<td><input type="submit" value="asignar" name="asignar"/></td>
</tr>
</table>