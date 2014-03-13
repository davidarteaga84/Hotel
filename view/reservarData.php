<?php include('cabecera.php'); ?>

<h1>Reservar habitaci&oacute;</h1>

<table>
	<form action="../view/reservarNumHab.php" method="post">
		<tr>
			<th>Data d'entrada:</th>
			<td>
				<input type="text" name="dataEntrada" />
			</td>
		</tr>
		<tr>
			<th>Data de sortida:</th>
			<td>
				<input type="text" name="dataSortida" />
			</td>
		</tr>
		<tr>
			<th>Següent pas:</th>
			<input type="hidden" name="categoria" value="<?php echo $_POST['categoria'];?>" />
			<td><input type="submit" name="submit" value="Endavant" /></td>
		</tr>
	</form>
</table>

<?php
include('../lib/avisos.php');
include('pie.php');
?>
