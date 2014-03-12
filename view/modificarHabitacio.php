<?php include('cabecera.php'); ?>

<h1>Modificar habitaci&oacute;</h1>

<?php
	$hab=$_GET['hab'];
	include ('../controller/llistarUnaHabitacio.php'); ?>
	
	<table>
		<form action="../controller/actualitzaHabitacio.php" method="post">
		<?php 
		foreach ($consulta as $fila){
			$categoriaSelected=$fila['categoria'];
			echo "<tr><th>Modificar habitaci&oacute;</th><td>".$hab."</td></tr>";
			echo "<tr><th>Categoria</th><td>";
			echo '<select name="cat">';
			include ('../controller/carregaSelectTarifes.php');
			echo '</select>';
			echo "</td></tr>";
		}
		?>
			<input type="hidden" name="hab" value="<?php echo $hab;?>" />
			<tr><td></td><td><input type="submit" name="submit" value="Actualitza" /></td></tr>
		</form>
	</table>

	<?php
include('../lib/avisos.php');
include('pie.php');
?>