<?php include('cabecera.php'); ?>

<h1>Llistat de tarifes</h1>

<table>
	<tr><th>Categoria</th><th>Preu</th><th>Modificar</th><th>Eliminar</th></tr>
	<?php 
	include ('../controller/llistarTarifes.php');
	foreach ($consulta as $fila){
		echo "<tr><td>".$fila['categoria']."</td>";
		echo "<td>".$fila['preu']."</td>";
		echo '<td><a href="modificarTarifa.php?categoria='.$fila['categoria'].'"><img src="img/editar.png" alt="Modificar Tarifa" /></td>';
		echo '<td><a href="../controller/eliminarTarifa.php?categoria='.$fila['categoria'].'" onclick="return confirm(\'Acció eliminar: '.$fila["categoria"].'\n\nEstàs segur?\');"><img src="img/eliminar.png" alt="Eliminar Tarifa" /></td>';
		echo "</tr>";		
	} 
	?>
</table>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>