<?php include('cabecera.php'); ?>

<h1>Llistat d'habitacions</h1>

<table>
	<tr><th>Habitació</th><th>Categoria/Tarifa</th><th>Modificar</th></tr>
	<?php 
	include ('../controller/llistarHabitacions.php');
	foreach ($consulta as $fila){
		echo "<tr><td>".$fila['numHabitacio']."</td>";
		echo "<td>".$fila['categoria']."</td>";
		echo '<td><a href="modificarHabitacio.php?hab='.$fila['numHabitacio'].'"><img src="img/editar.png" alt="Modificar Tarifa" /></td>';
		echo "</tr>";
	} 
	?>
</table>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>