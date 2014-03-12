<?php include('cabecera.php'); ?>

<h1>Donar d'alta client</h1>

<form action="../controller/altaClient.php" method="post" name="altaClient" onsubmit="return valida();">
	<table>
		<tr><td>Nom:</td><td><input type="text" name="nom" /></td></tr>
		<tr><td>Cognom:</td><td><input type="text" name="cognom" /></td></tr>
		<tr><td>NIF:</td><td><input type="text" name="nif" /></td></tr>
		<tr><td></td><td><input type="submit" value="Alta client" /></td></tr> 
	</table>
</form>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>