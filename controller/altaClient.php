<?php

require_once("../model/business/class_client.php");

$nif=strtoupper($_POST['nif']);
$nom=$_POST['nom'];
$cognom=$_POST['cognom'];

try {
	$client=new Client($nif, $nom, $cognom); 
	$consulta=$client->trobar_client_nif();
	foreach ($consulta as $fila){ $valor=$fila[0]; }
	if ($valor==false) { //No ha trobat el nif i el podem donar d'alta
		$client->afegir_client();
		header ("Location: ../view/llistarClients.php?errAltaClient=0");
	} else { 
		header ("Location: ../view/llistarClients.php?errAltaClient=1"); 
	}
} catch (Exception $e) {
	$msg='Excepción capturada: '.$e->getMessage();
	header ("Location: ../view/llistarClients.php?errAltaClient=1");
}

?>