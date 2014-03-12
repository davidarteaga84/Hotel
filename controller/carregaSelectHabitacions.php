<?php

require_once("../model/business/class_habitacio.php");

try {
	$habitacio=new Habitacio("", "", ""); 
	$consulta=$habitacio->reservar_habitacions();
	foreach ($consulta as $fila){
		echo "<option value='".$fila['numHabitacio']."'>".$fila['numHabitacio']." cat.".$fila['categoria']."</option>";
	}
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

?>