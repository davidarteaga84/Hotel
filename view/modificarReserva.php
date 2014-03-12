<?php include('cabecera.php'); ?>

<h1>Modificar reserva</h1>

<?php
	$id=$_GET['id'];
	include ('../controller/llistarUnaReserva.php');
?>
	<table>
		<form action="../controller/actualitzaReserva.php" method="post" onsubmit="return valida();">
		<?php 
		foreach ($consulta as $fila){
			$nifClient=$fila['nifClient'];
			$habitacio=$fila['habitacio'];
		
			$data=$fila['dataEntrada'];
			$fecha = explode("-", $data);
			$any=$fecha[0];
			$mes=$fecha[1];
			$dia=$fecha[2];
			$dataEntrada=$dia."/".$mes."/".$any;
			
			$data=$fila['dataSortida'];
			$fecha = explode("-", $data);
			$any=$fecha[0];
			$mes=$fecha[1];
			$dia=$fecha[2];
			$dataSortida=$dia."/".$mes."/".$any;			
			
			echo "<tr><th>Modificar reserva num.</th><td>".$id."</td></tr>";
			echo "<tr><th>Client</th><td>".$nifClient."</td></tr>";
			echo "<tr><th>Habitaci&oacute;</th><td><input type='text' name='habitacio' value='".$habitacio."' /></td></tr>";
			echo "<tr><th>Data entrada</th><td><input type='text' name='dataEntrada' value='".$dataEntrada."' /></td></tr>";
			echo "<tr><th>Data sortida</th><td><input type='text' name='dataSortida' value='".$dataSortida."' /></td></tr>";
		}
		?>
			<input type='hidden' name='id' value='<?php echo $id; ?>' />
			<input type='hidden' name='nifClient' value='<?php echo $nifClient; ?>' />
			<tr><th></th><td><input type="submit" name="submit" value="Actualitza" /></td></tr>
		</form>
	</table>
<?php
include('../lib/avisos.php');
include('pie.php');
?>