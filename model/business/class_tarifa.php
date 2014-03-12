<?php

require_once("../model/DAO/class_tarifa_db.php");

class tarifa {
	
	private $categoria;
	private $preu;
	
	
	public function __construct($categoria, $preu) {	
		$this->setCategoria($categoria);
		$this->setPreu($preu);
	}
	
	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria($valor){
		$this->categoria = $valor;
	}
	
	public function getPreu(){
		return $this->preu;
	}

	public function setPreu($valor){
		$this->preu = $valor;
	}
	
	public function trobar_tarifa_cat(){ //Busca una tarifa per categoria
		$tarifaDB = new tarifa_db();
		return $tarifaDB->trobarTarifa($this);
	}
	
	public function afegir_tarifa(){ //Afegeix una tarifa
		$tarifaDB = new tarifa_db();
		$tarifaDB->inserir($this);		
	}
	
	public function eliminar_tarifa(){ //Elimina una tarifa
		$tarifaDB = new tarifa_db();
		$tarifaDB->eliminar($this);		
	}
	
	public function llistar_una_tarifa() { //Torna una tarifa
		$tarifaDB = new tarifa_db();
		return $tarifaDB->llistarUnaTarifa($this);
	}
	
	public function llistar_tarifes() { //Torna totes les tarifes
		$tarifaDB = new tarifa_db();
		return $tarifaDB->llistar();
	}
	
	public function modificar_tarifa() { //Modificar tarifa amb nou preu
		$tarifaDB = new tarifa_db();
		return $tarifaDB->modificarTarifa($this);
	}

}	
?>