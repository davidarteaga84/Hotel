<?php 
include('cabecera.php'); 
include('../controller/reservarNumHab.php');
?>

<h1>Reservar habitaci&oacute;</h1>

<table>
	<form action="../view/reservarHabitacio.php" method="post">
		<tr>
			<th>Tipus d'habitaci&oacute;:</th>
			<td>
				<select name="habitacio">
					<?php 
					foreach ($consulta as $fila){
						echo '<option>'.$fila['numHabitacio'].'</option>';					
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Següent pas:</th>
			<input type="hidden" name="categoria" value="<?php echo $categoria; ?>" />
			<input type="hidden" name="dataEntrada" value="<?php echo $dataEntrada; ?>" />
			<input type="hidden" name="dataSortida" value="<?php echo $dataSortida; ?>" />
			<td><input type="submit" name="submit" value="Endavant" /></td>
		</tr>
	</form>
</table>

<?php
include('../lib/avisos.php');
include('pie.php');
?>
