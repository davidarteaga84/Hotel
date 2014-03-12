<?php

include('../model/business/class_reserva.php');

try {
	$reserva=new Reserva("","","","",""); 
	$consulta=$reserva->llistar_una_reserva($id);
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>
