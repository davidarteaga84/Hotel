<?php

include('../model/business/class_tarifa.php');

try {
	$tarifa=new Tarifa("", "", ""); 
	$consulta=$tarifa->llistar_tarifes();
} catch (Exception $e) {
    echo 'Excepci�n capturada: ',  $e->getMessage(), "\n";
}

?>
