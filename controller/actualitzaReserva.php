<?php

require_once("../model/business/class_reserva.php");

$id=$_POST['id'];
$habitacio=$_POST['habitacio'];
$nifClient=$_POST['nifClient'];
$dataEntrada=$_POST['dataEntrada'];
$dataSortida=$_POST['dataSortida'];

try {
	$reserva=new Reserva($nifClient,$habitacio,$dataEntrada,$dataSortida); 
	$reserva->modificar_reserva($id);
	header ("Location: ../view/mostrarReserves.php?errModificarReserva=0");
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
	header ("Location: ../view/mostrarReserves.php?errModificarReserva=1");
}

?>