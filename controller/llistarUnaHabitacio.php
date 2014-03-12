<?php

include('../model/business/class_habitacio.php');

try {
	$habitacio=new Habitacio($hab, ""); 
	$consulta=$habitacio->llistar_una_habitacio();
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>
