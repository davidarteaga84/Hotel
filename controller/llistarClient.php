<?php

include('../model/business/class_client.php');

try {
	$client=new Client("", "", ""); 
	$consulta=$client->llistar_clients();
} catch (Exception $e) {
    echo 'Excepci�n capturada: ',  $e->getMessage(), "\n";
}

?>
