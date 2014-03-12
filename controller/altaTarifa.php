<?php 

require_once("../model/business/class_tarifa.php");

$categoria=strtoupper($_POST['categoria']);
$preu=$_POST['preu'];
$categoria=$categoria[0];

try {
	if (is_string($categoria) && !is_numeric($categoria)){
		$tarifa=new Tarifa($categoria,$preu); 
		$consulta=$tarifa->trobar_tarifa_cat();
		$valor=-1;
		foreach ($consulta as $fila){ $valor=$fila[0]; }
		if ($valor==false) { //No ha trobat la categoria i la podem donar d'alta
			$tarifa->afegir_tarifa();
			header ("Location: ../view/llistarTarifes.php?errAltaTarifa=0");
		} else {
			header ("Location: ../view/llistarTarifes.php?errAltaTarifa=1"); 
		}
	} else { header ("Location: ../view/llistarTarifes.php?errAltaTarifa=2");  }
} catch (Exception $e) {
    $msg='Excepción capturada: '.$e->getMessage();
	header ("Location: ../view/llistarTarifes.php?errAltaTarifa=1");
}

?>