<?php

require_once("../model/business/class_client.php");

$nif=$_GET['nif'];

try {
	$client=new Client($nif,"Nom","Cognom");
	$client->eliminar_client();
	header ("Location: ../view/llistarClients.php?errEliminaClient=0");
} catch (Exception $e) {
    $msg='Excepción capturada: '.$e->getMessage();
	header ("Location: ../view/llistarClients.php?errEliminaClient=1&msg"); 
}

?>