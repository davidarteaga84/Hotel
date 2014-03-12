Que vols fer?
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"><br />
	<table>
	<th colspan="2">Recepcionistes</th>
	<tr><td>Llistar</td><td><input type="radio" name="accio" value="Llistar" /></td></tr>
	<tr><td>Crear</td><td><input type="radio" name="accio" value="Crear" /></td></tr>
	<tr><td>Modificar</td><td><input type="radio" name="accio" value="Canviar" /></td></tr>
	<tr><td>Canviar contrasenya</td><td><input type="radio" name="accio" value="Contrasenya" /></td></tr>
	<tr><td>Eliminar</td><td><input type="radio" name="accio" value="EliminarU" /></td></tr>
	</table>
	<input type="submit" value="OK">
</form>
