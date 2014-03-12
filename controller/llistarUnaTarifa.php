<?php

include('../model/business/class_tarifa.php');

try {
	$categoria=$_GET['categoria'];
	$preu=0;
	$tarifa=new Tarifa($categoria,$preu); 
	$consulta=$tarifa->llistar_una_tarifa();
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>
