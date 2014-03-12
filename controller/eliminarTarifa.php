<?php

require_once("../model/business/class_tarifa.php");

try {
	$categoria=$_GET['categoria'];
	$preu=0;
	$tarifa=new Tarifa($categoria,$preu);
	$tarifa->eliminar_tarifa();
	header ("Location: ../view/llistarTarifes.php?errEliminarTarifa=0");
} catch (Exception $e) {
    $msg='Excepción capturada: '.$e->getMessage();
	header ("Location: ../view/llistarTarifes.php?errEliminarTarifa=1&msg");
}

?>