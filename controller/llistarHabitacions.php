<?php

include('../model/business/class_habitacio.php');

try {
	$habitacio=new Habitacio("", "", ""); 
	$consulta=$habitacio->llistar_habitacions();
} catch (Exception $e) {
    echo 'Excepci�n capturada: ',  $e->getMessage(), "\n";
}

?>
