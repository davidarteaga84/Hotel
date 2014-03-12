<?php include('cabecera.php'); ?>

<h1>Reservar habitaci&oacute;</h1>

<table>
	<form action="../view/reservarData.php" method="post">
		<tr>
			<th>Tipus d'habitaci&oacute;:</th>
			<td>
				<select name="categoria">
					<?php include('../controller/carregaSelectTarifes.php'); ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Següent pas:</th>
			<td><input type="submit"  name="submit" value="Endavant" /></td>
		</tr>
	</form>
</table>

<?php
include('../lib/avisos.php');
include('pie.php');
?>
