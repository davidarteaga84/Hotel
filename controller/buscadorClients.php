<?php

include('../model/business/class_client.php');

try {
	$camp="";
	$client=new Client("", "", "");

	if (isset($_POST['dni'])) {
		$client->SetNif($_POST['dni']);
		$camp="nif";
	}
	if (isset($_POST['nom'])) {
		$client->SetNom($_POST['nom']);
		$camp="nom";
	}
	if (isset($_POST['cognom'])) {
		$client->SetCognom($_POST['cognom']);
		$camp="cognom";
	}

	if ($camp!="") { 
		$consulta=$client->consultar_clients($camp);
	} else { header ("Location: ../view/consultarClient.php?errConsultarClient=1"); }

} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>