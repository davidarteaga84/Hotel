<?php

require_once("../model/business/class_tarifa.php");

$categoria=$_POST['categoria'];
$preu=$_POST['preu'];

try {
	$tarifa=new Tarifa($categoria, $preu); 
	$tarifa->modificar_tarifa();
	header ("Location: ../view/llistarTarifes.php?errModificarTarifa=0");
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
	header ("Location: ../view/llistarTarifes.php?errModificarTarifa=1");
}

?>