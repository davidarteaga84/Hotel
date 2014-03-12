<?php

require_once("../model/business/class_client.php");

$nif=$_POST['nif'];
$nom=$_POST['nom'];
$cognom=$_POST['cognom'];

try {
	$client=new Client($nif, $nom, $cognom); 
	$client->modificar_client();
	header ("Location: ../view/llistarClients.php?errModificarClient=0");
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

?>