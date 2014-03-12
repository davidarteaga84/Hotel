<?php

require_once("../model/business/class_tarifa.php");

try {
	$tarifa=new Tarifa("", "", ""); 
	$consulta=$tarifa->llistar_tarifes();
	foreach ($consulta as $fila){
		if (isset($categoriaSelected) && $categoriaSelected==$fila['categoria']){
			echo "<option value='".$fila['categoria']."' selected>".$fila['categoria']."</option>";
		}
		else {
			echo "<option value='".$fila['categoria']."'>".$fila['categoria']."</option>";
		}
	}
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

?>