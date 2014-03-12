<?php include('cabecera.php'); ?>

<h1>Modificar client</h1>

<?php
	$nif=$_GET['nif'];
	include ('../controller/llistarUnClient.php'); ?>
	
	<table>
		<form action="../controller/actualitzaClient.php" method="post">
		<?php 
		foreach ($consulta as $fila){
			$nif=$fila['nif'];
			echo "<tr><th>Modificar client</th><td>".$nif."</td></tr>";
			echo "<tr><th>Nom</th><td><input type='text' name='nom' value='".$fila['nom']."' /></td></tr>";
			echo "<tr><th>Cognom</th><td><input type='text' name='cognom' value='".$fila['cognom']."' /></td></tr>";
		}
		?>
			<input type="hidden" name="nif" value="<?php echo $fila['nif'];?>" />
			<tr><td></td><td><input type="submit" name="submit" value="Actualitza" /></td></tr>
		</form>
	</table>

	<?php
include('../lib/avisos.php');
include('pie.php');
?>