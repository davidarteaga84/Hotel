<?php

include('../model/business/class_client.php');

try {
	$client=new Client($nif, "", ""); 
	$consulta=$client->llistar_un_client();
} catch (Exception $e) {
    echo 'Excepci�n capturada: ',  $e->getMessage(), "\n";
}

?>
