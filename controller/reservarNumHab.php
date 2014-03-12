<?php

include('../model/business/class_reserva.php');

$categoria=$_POST['categoria'];
$dataEntrada=$_POST['dataEntrada'];
$dataSortida=$_POST['dataSortida'];

try {
	$reserva=new Reserva("","",$dataEntrada,$dataSortida); 
	$consulta=$reserva->mostrar_habitacions_disponibles($categoria);
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

?>