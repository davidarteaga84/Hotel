<?php include('cabecera.php'); ?>

<h1>Modificar tarifes</h1>

<?php
	include ('../controller/llistarUnaTarifa.php'); ?>
	<table>
		<form action="../controller/actualitzaTarifa.php" method="post">
		<?php 
		foreach ($consulta as $fila){
			echo "<tr><th>Modificar tarifa</th><td>".$categoria."</td></tr>";
			echo "<tr><th>Preu</th><td><input type='text' name='preu' value='".$fila['preu']."' /></td></tr>";
		}
		?>
			<input type="hidden" name="categoria" value="<?php echo $categoria;?>" />
			<tr><td></td><td><input type="submit" name="submit" value="Actualitza" /></td></tr>
		</form>
	</table>
<?php
include('../lib/avisos.php');
include('pie.php');
?>