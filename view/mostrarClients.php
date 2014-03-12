<?php 
include('cabecera.php'); 
include('../controller/buscadorClients.php');
?>

<h1>Cercador de clients</h1>

<table>
	<tr><th>Dni</th><th>Nom</th><th>Cognom</th><th>Modificar</th><th>Eliminar</th></tr>
	<?php 
	foreach ($consulta as $fila){
		echo "<tr><td>".$fila['nif']."</td>";
		echo "<td>".$fila['nom']."</td>";
		echo "<td>".$fila['cognom']."</td>";
		echo '<td><a href="modificarClient.php?nif='.$fila['nif'].'"><img src="img/editar.png" alt="Modificar Client" /></td>';
		echo '<td><a href="../controller/eliminarClient.php?nif='.$fila['nif'].'" onclick="return confirm(\'Acció eliminar: '.$fila["nif"].'\n\nEstàs segur?\');"><img src="img/eliminar.png" alt="Eliminar Client" /></td>';
		echo "</tr>";
	}
	?>
</table>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>