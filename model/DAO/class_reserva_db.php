<?php 

require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");

class reserva_db {

	public function mostrar_disponibles($reservaDB,$cat) { //Torna habitacions disponibles segons categoria i data
		$sql="SELECT numHabitacio FROM habitacio WHERE categoria='".$cat."'";//."' AND numHabitacio IN (SELECT DISTINCT habitacio FROM reserva WHERE dataEntrada<>'".$reservaDB->getDataEntrada()."'";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function llistar($reservaDB) { //Torna reserves que encara no han succeït
		$sql="SELECT * FROM reserva WHERE dataSortida>=".date("Ymd")." ORDER BY dataEntrada ASC";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function reservar_habitacio($reservaDB) { //Registrar reserva
		$sql="INSERT INTO reserva (nifClient,habitacio,dataEntrada,dataSortida,activa) VALUES ('".$reservaDB->getNifClient()."','".$reservaDB->getHabitacio()."','".$reservaDB->getDataEntrada()."','".$reservaDB->getDataSortida()."',1)";
		$connexio = new db();
		return $connexio->executa($sql);
	}

	public function activar($id) { //Canvia estat de reserva a activada
		$sql="UPDATE reserva SET activa=1 WHERE id=".$id;
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function desactivar($id) { //Canvia estat de reserva a desactivada
		$sql="UPDATE reserva SET activa=0 WHERE id=".$id;
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function llistar_una($id) { //Torna la reserva segons id
		$sql="SELECT * FROM reserva WHERE id=".$id;
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function llistar_historic() { //Torna les reserves ja passades en el temps
		$sql="SELECT * FROM reserva WHERE dataSortida<".date("Ymd")." ORDER BY dataEntrada DESC";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function modificar($id,$reservaDB) { //Modificar reserva
		$sql="UPDATE reserva SET habitacio=".$reservaDB->getHabitacio().",dataEntrada='".$reservaDB->getDataEntrada()."',dataSortida='".$reservaDB->getDataSortida()."' WHERE id=".$id;
		$connexio = new db();
		return $connexio->executa($sql);
	}
}

?>
