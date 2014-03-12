<?php

include('../model/DAO/class_reserva_db.php');

class reserva {

	private $id;
	private $nifClient;
	private $habitacio;
	private $dataEntrada;
	private $dataSortida;
	private $activa;

	public function __construct($nifClient, $habitacio, $dataEntrada, $dataSortida) {
		$this->setNifClient($nifClient);
		$this->setHabitacio($habitacio);
		$this->setDataEntrada($dataEntrada);
		$this->setDataSortida($dataSortida,$dataEntrada);
		$this->setActiva(1);
	}

	public function getNifClient(){
		return $this->nifClient;
	}

	public function setNifClient($valor){
		$this->nifClient = $valor;
	}

	public function getHabitacio(){
		return $this->habitacio;
	}

	public function setHabitacio($valor){
		$this->habitacio = $valor;
	}

	public function getDataEntrada(){
		return $this->dataEntrada;
	}

	public function setDataEntrada($valor){
		function comprobarDataPosterior($data){
			$ok=false;
			if ($data!=""){
				$data = str_replace("/", "-", $data);
				$data = explode("-",$data);
				$dia=$data[0];
				$mes=$data[1];
				$any=$data[2];
				if (checkdate($mes,$dia,$any)) {
					$data=$any."-".$mes."-".$dia;
					if((($any*10000)+($mes*100)+$dia) >= date("Ymd")) {
						$ok=$data;
					}
				}
			}
			return $ok;
		}	
		
		$dataEntrada=comprobarDataPosterior($valor);
		if ($dataEntrada!=false){
			$this->dataEntrada = $dataEntrada;
		} else { 
			$this->dataEntrada = date("Y-m-d"); 
		}
	}

	public function getDataSortida(){
		return $this->dataSortida;
	}

	public function setDataSortida($valorSortida,$valorEntrada){
		if ($valorSortida!=""){
			$data = str_replace("/", "-", $valorSortida);
			$fecha = explode("-", $data);
			$dia=$fecha[0];
			$mes=$fecha[1];
			$any=$fecha[2];
			$date=$any."-".$mes."-".$dia;
			if (checkdate($mes,$dia,$any)){
				$data2=$valorEntrada;
				$data2 = str_replace("/", "-", $data2);
				$fecha2 = explode("-", $data2);
				$dia2=$fecha2[0];
				$mes2=$fecha2[1];
				$any2=$fecha2[2];
				$date2=$any2."-".$mes2."-".$dia2;
				if (checkdate($mes2,$dia2,$any2)) {
					if((($any*10000)+($mes*100)+$dia) >= (($any2*10000)+($mes2*100)+$dia2)) { $this->dataSortida = $date; }
					else {
						$date2=$any2."-".$mes2."-".($dia2+1);
						$this->dataSortida = $date2;
					}
				} else { $this->dataSortida = date("Y-m-d"); }
			} else { $this->dataSortida = date("Y-m-d"); }
		}
	}	

	public function getActiva(){
		return $this->activa;
	}

	public function setActiva($valor){
		$this->activa = $valor;
	}

	public function mostrar_habitacions_disponibles($cat){
		$reservaDB = new reserva_db();
		return $reservaDB->mostrar_disponibles($this,$cat);
	}

	public function llistar_reserves(){
		$reservaDB = new reserva_db();
		return $reservaDB->llistar($this);
	}

	public function reservar_habitacio(){
		$reservaDB = new reserva_db();
		return $reservaDB->reservar_habitacio($this);
	}

	public function activar_reserva($id){
		$reservaDB = new reserva_db();
		return $reservaDB->activar($id);
	}

	public function desactivar_reserva($id){
		$reservaDB = new reserva_db();
		return $reservaDB->desactivar($id);
	}

	public function llistar_una_reserva($id){
		$reservaDB = new reserva_db();
		return $reservaDB->llistar_una($id);
	}

	public function llistar_historic_reserves(){
		$reservaDB = new reserva_db();
		return $reservaDB->llistar_historic();
	}
	
	public function modificar_reserva($id){
		$reservaDB = new reserva_db();
		return $reservaDB->modificar($id,$this);
	}
	
}

?>