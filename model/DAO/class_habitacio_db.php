 <?php 

require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");

class habitacio_db {

	public function llistar() { //Torna totes les habitacios
		$sql="SELECT * FROM habitacio ORDER BY numHabitacio ASC";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}
	
	public function llistarUna($habitacioDB) { //Torna una habitació
		$sql="SELECT * FROM habitacio WHERE numHabitacio='".$habitacioDB->getNumHabitacio()."'";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function modificar($habitacioDB) { //Torna una habitació
		$sql="UPDATE habitacio SET categoria='".$habitacioDB->getCategoria()."' WHERE numHabitacio='".$habitacioDB->getNumHabitacio()."'";
		$connexio = new db();
		return $connexio->executa($sql);
	}
	
	public function reservar($habitacioDB) { //Torna habitacions
		$sql="SELECT * FROM habitacio WHERE numHabitacio='".$habitacioDB->getNumHabitacio()."'";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}
}

?>
