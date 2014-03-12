<?php include('cabecera.php'); ?>

<h1>Hist&ograve;ric de reserves</h1>

<table>
	<tr><th>Estat</th><th>id Reserva</th><th>Habitació</th><th>Client</th><th>Data entrada</th><th>Data sortida</th></tr>
	<?php 
	include ('../controller/mostrarHistoricReserves.php');
	if (isset($consulta)){
		foreach ($consulta as $fila){
			if ($fila['activa']==1) { echo "<tr><td>Tancada</td>"; }
			else { echo '<tr class="inactiva"><td>No realitzada</td>'; }
			echo "<td>".$fila['id']."</td>";
			echo "<td>".$fila['habitacio']."</td>";
			echo "<td>".$fila['nifClient']."</td>";
			echo "<td>".$fila['dataEntrada']."</td>";
			echo "<td>".$fila['dataSortida']."</td>";
			echo "</tr>";
		} 
	}
	?>
</table>

<?php 
include('../lib/avisos.php');
include('pie.php');
?>