<?php 

require_once("../model/DAO/class_client_db.php");

class client {
	
	private $nif;
	private $nom;
	private $cognom;
	
	public function __construct($nif, $nom, $cognom) {
		$this->setNif($nif);
		$this->setNom($nom);
		$this->setCognom($cognom);
		$this->setActivat(1);
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($valor){
		$this->nom = $valor;
	}

	public function getCognom(){
		return $this->cognom;
	}

	public function setCognom($valor){
		$this->cognom = $valor;
	}

	public function getNif(){
		return $this->nif;
	}

	public function setNif($valor){
		$this->nif = $valor;
	}
	
	public function getActivat(){
		return $this->activat;
	}

	public function setActivat($valor){
		$this->activat = $valor;
	}
	
	public function afegir_client(){
		$clientDB = new client_db();
		$clientDB->inserir($this);
	}
	
	public function eliminar_client(){
		$clientDB = new client_db();
		$clientDB->eliminar($this);
	}
	
	public function trobar_client_nif(){
		$clientDB = new client_db();
		return $clientDB->trobar_nif($this);
	}
	
	public function llistar_clients(){
		$clientDB = new client_db();
		return $clientDB->llistar();
	}

	public function modificar_client(){
		$clientDB = new client_db();
		return $clientDB->modificar($this);
	}
	
	public function consultar_clients($camp){
		$clientDB = new client_db();
		return $clientDB->consultar($this,$camp);
	}
	
	public function llistar_un_client(){
		$clientDB = new client_db();
		return $clientDB->llistarUnClient($this);
	}
}

?>
