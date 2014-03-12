<?php

require_once("../model/business/class_client.php");

try {
	$client=new Client("", "", ""); 
	$consulta=$client->llistar_clients();
	foreach ($consulta as $fila){
		echo "<option value='".$fila['nif']."'>".$fila['nom']." ".$fila['cognom']."</option>";
	}
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

?>