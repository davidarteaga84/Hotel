<?php include('cabecera.php'); ?>

<h1>Llistar clients</h1>

<table>
	<form action="../view/mostrarClients.php" method="post" name="name" onsubmit="return validaNom();">
		<tr>
			<th>Buscar client pel seu nom</th>
			<td><input type="text" name="nom" /></td>
			<td><input type="submit" name="submit" value="Buscar nom" /></td>
		</tr>
	</form>
	
	<form action="../view/mostrarClients.php" method="post" name="surname" onsubmit="return validaCognom();">
		<tr>
			<th>Buscar client pel seu cognom</th>
			<td><input type="text" name="cognom" /></td>
			<td><input type="submit" name="submit" value="Buscar cognom" /></td>
		</tr>
	</form>
	
	<form action="../view/mostrarClients.php" method="post" name="id" onsubmit="return validaNif();">
		<tr>
			<th>Buscar client pel seu DNI</th>
			<td><input type="text" name="dni" /></td>
			<td><input type="submit" name="submit" value="Buscar DNI" /></td>
		</tr>
	</form>
		<tr>
			<th>Mostrar tots</th>
			<td><a href="llistarClients.php"><button>Mostrar</button></a></td>
		</tr>
</table>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>
