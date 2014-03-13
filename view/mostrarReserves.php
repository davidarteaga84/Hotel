<?php include('cabecera.php'); ?>

<h1>Llistar pr&oacute;ximes reserves</h1>

<table>
	<tr><th>id Reserva</th><th>Habitació</th><th>NIF</th><th>Nom</th><th>Cognom</th><th>Data entrada</th><th>Data sortida</th><th>Editar</th><th>Estat reserva</th></tr>
	<?php 
	include ('../controller/mostrarReserves.php');
	if (isset($consulta)){
		foreach ($consulta as $fila){
		
			if ($fila['activa']==1) { echo "<tr>"; }
			else { echo '<tr class="inactiva">'; }
		
			echo "<td>".$fila['id']."</td>";
			echo "<td>".$fila['habitacio']."</td>";
			echo "<td>".$fila['nifClient']."</td>";
			echo "<td>".$fila['nom']."</td>";			//Martí 12/03/2014
			echo "<td>".$fila['cognom']."</td>";
			echo "<td>".$fila['dataEntrada']."</td>";
			echo "<td>".$fila['dataSortida']."</td>";
			echo '<td><a href="modificarReserva.php?id='.$fila['id'].'"><img src="img/editar.png" alt="Modificar Reserva" /></td>';
			
			if ($fila['activa']==1) { echo '<td><a href="../controller/desactivarReserva.php?id='.$fila['id'].'" onclick="return confirm(\'Acció desactivar reserva num: '.$fila["id"].'\n\nEstàs segur?\');">Activa</a></td>'; }
			else { echo '<td><a href="../controller/activarReserva.php?id='.$fila['id'].'" onclick="return confirm(\'Acció tornar a activar reserva num: '.$fila["id"].'\n\nEstàs segur?\');">Cancel·lada</a></td>'; }
			
			echo "</tr>";
		}
	}
	?>
</table>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>