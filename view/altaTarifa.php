<?php include('cabecera.php'); ?>

<h1>Incloure nova tarifa</h1>

<form action="../controller/altaTarifa.php" method="post" name="altaTarifa" onsubmit="return valida();">
	<table>
		<tr><th>Categoria:</th><td><input type="text" name="categoria" /></td></tr>
		<tr><th>Preu:</th><td><input type="text" name="preu" /></td></tr>
		<tr><th></th><td><input type="submit" name="submit" value="Incloure tarifa" onclick="validar()" /></td></tr>
	</table>
</form>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>
