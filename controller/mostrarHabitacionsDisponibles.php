<?php

include('../model/business/class_reserva.php');

$dataEntrada=$_POST['dataEntrada'];
$dataSortida=$_POST['dataSortida'];

try {
	$reserva=new Reserva("","",$dataEntrada,$dataSortida,""); 
	$consulta=$reserva->mostrar_habitacions_disponibles();
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>
