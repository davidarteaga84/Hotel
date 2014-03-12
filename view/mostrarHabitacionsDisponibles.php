<?php include('cabecera.php'); ?>

<h1>Reservar habitaci&oacute;</h1>

<table>
	<form action="../view/mostrarHabitacions.php" method="post" name="llistar" onsubmit="return validarData();">
		<tr>		
			<th>Data Entrada: (dd/mm/aaaa)</th>
			<td><input type="text" name="dataEntrada" /></td>
		</tr>
		<tr>		
			<th>Data Sortida: (dd/mm/aaaa)</th>
			<td><input type="text" name="dataSortida" /></td>
		</tr>
		<tr>
			<th>Veure habitacions lliures:</th>
			<td><input type="submit"  name="submit" value="Consulta" /></td>
		</tr>
	</form>
</table>

<?php
include('../lib/avisos.php');
include('pie.php');
?>
