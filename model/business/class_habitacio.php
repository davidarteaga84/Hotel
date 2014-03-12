<?php 

require_once("../model/DAO/class_habitacio_db.php");

class habitacio {
	
	private $numHabitacio;
	private $categoria;
	
	public function __construct($numHabitacio,$categoria) {
		$this->setNumHabitacio($numHabitacio);
		$this->setCategoria($categoria);
	}

	public function getNumHabitacio(){
		return $this->numHabitacio;
	}

	public function setNumHabitacio($valor){
		$this->numHabitacio = $valor;
	}
	
	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria($valor){
		$this->categoria = $valor;
	}	
	
	public function llistar_habitacions(){
		$habitacioDB = new habitacio_db();
		return $habitacioDB->llistar();
	}

	public function llistar_una_habitacio(){
		$habitacioDB = new habitacio_db();
		return $habitacioDB->llistarUna($this);
	}

	public function modificar_habitacio(){
		$habitacioDB = new habitacio_db();
		return $habitacioDB->modificar($this);
	}

	public function reservar_habitacions(){
		$habitacioDB = new habitacio_db();
		return $habitacioDB->reservar($this);
	}
	
}	

?>
