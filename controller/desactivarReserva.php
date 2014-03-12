<?php

require_once("../model/business/class_reserva.php");

$id=$_GET['id'];

try {
	$reserva=new Reserva("","","","","");
	$reserva->desactivar_reserva($id);
	header ("Location: ../view/mostrarReserves.php");
} catch (Exception $e) {
    $msg='Excepción capturada: '.$e->getMessage();
	header ("Location: ../view/mostrarReserves.php?errActivarReserva=1&msg"); 
}

?>