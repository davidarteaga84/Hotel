<?php 
include('cabecera.php'); 
include ('../controller/mostrarHabitacionsDisponibles.php');
?>

<h1>Reservar habitaci&oacute;</h1>
Habitacions disponibles per als dies <?php echo $_POST['dataEntrada']." fins al ".$_POST['dataSortida']; ?>
<table>
	<tr>
		<th>Sel·leccionar habitació</th>
		<th>Categoria</th>
		<th>Preu</th>
	</tr>
	
	<?php
	if (isset($consulta)){
		foreach ($consulta as $fila){
			echo "<tr>";
			echo '<td><a href="reservarHabitacio.php?dataEntrada='.$_POST['dataEntrada'].'&dataSortida='.$_POST['dataSortida'].'& 	habitacio='.$fila['numHabitacio'].'">'.$fila['numHabitacio'].'</a></td>';
			echo "<td>".$fila['categoria']."</td>";
			echo "<td>".$fila['preu']."</td>";
			echo "</tr>";
		}
	}
	?>
</table>

<?php
include('../lib/avisos.php');
include('pie.php');
?>