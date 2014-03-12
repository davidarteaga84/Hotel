<?php

require_once("../model/business/class_habitacio.php");

$categoria=$_POST['cat'];
$habitacio=$_POST['hab'];

try {
	$habitacio=new Habitacio($habitacio, $categoria); 
	$habitacio->modificar_habitacio();
	header ("Location: ../view/llistarHabitacions.php?errModificarHabitacio=0");
} catch (Exception $e) {
    echo 'Excepci�n capturada: ',  $e->getMessage(), "\n";
	header ("Location: ../view/llistarHabitacions.php?errModificarHabitacio=1");
}

?>