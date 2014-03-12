<?php

include('../model/business/class_reserva.php');

$nif=$_POST['client'];
$habitacio=$_POST['habitacio'];
$dataEntrada=$_POST['dataEntrada'];
$dataSortida=$_POST['dataSortida'];

try {
	$reserva=new Reserva($nif,$habitacio,$dataEntrada,$dataSortida); 
	$consulta=$reserva->reservar_habitacio();
	header ("Location: ../view/mostrarReserves.php?errorReservar=0");
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

?>

