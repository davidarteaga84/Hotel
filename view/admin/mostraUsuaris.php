<?php 
//MOSTRAR USUARIS
include('../BD/connectar.php');/*Inclou les connexions al PhpMyAdmin i a la BBDD*/
$sql="SELECT id,dni,nom FROM usuaris"; /*Consulta que ens retorna les dades d'usuaris menys passwd*/
$resultado=mysql_query($sql);
$campos=mysql_num_fields($resultado);
$filas=mysql_num_rows($resultado);
echo "<p><b>$filas usuaris</b></p>";
echo "<table>";
echo "<tr>";
for ($i=0;$i<$campos;$i++){
	$nombrecampo=mysql_field_name($resultado,$i);
	echo "<th>$nombrecampo</th>";
}
echo "</tr>";
while ($row=mysql_fetch_assoc($resultado)){
	echo "<tr>";
	$i=0;
	foreach ($row as $key => $value){
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
echo "</table><br />";
?>
<a href="index.php">Enrere</a>