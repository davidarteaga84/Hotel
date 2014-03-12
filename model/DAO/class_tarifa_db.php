 <?php 

require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");

class tarifa_db {
	
	public function inserir($tarifaDB) {
		$sql="INSERT INTO categoria (categoria,preu) VALUES ('".$tarifaDB->getCategoria()."', '".$tarifaDB->getPreu()."')";
		$connexio = new db();
		return $connexio->executa($sql);
	} 
		
	public function trobarTarifa($tarifaDB) {
		$sql="SELECT COUNT(*) FROM categoria WHERE categoria='".$tarifaDB->getCategoria()."'";
		$connexio = new db();
		return $connexio->executaArray($sql);
	} 	
	
	public function eliminar($tarifaDB) {
		$sql="DELETE FROM categoria WHERE categoria='".$tarifaDB->getCategoria()."'";
		$connexio = new db();
		return $connexio->executa($sql);
	} 
	
	public function llistar() { //Torna totes els tarifes
		$sql="SELECT * FROM categoria";
		$connexio = new db();
		return $connexio->executaArray($sql);
	} 
	
	public function llistarUnaTarifa($tarifaDB) {
		$sql="SELECT * FROM categoria WHERE categoria='".$tarifaDB->getCategoria()."'";
		$connexio = new db();
		return $connexio->executaArray($sql);
	} 	
	
	public function modificarTarifa($tarifaDB) {
		$sql="UPDATE categoria SET preu='".$tarifaDB->getPreu()."' WHERE categoria='".$tarifaDB->getCategoria()."'";
		$connexio = new db();
		return $connexio->executa($sql);
	}	
	
}

?>
