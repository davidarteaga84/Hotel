 <?php 

require_once("../model/DAO/class_db.php");
require_once("../config/config.inc.php");

class client_db {

	public function inserir($client) { //Inserir client
		$sql="INSERT INTO client (nif ,nom ,cognom) VALUES ('".$client->getNif()."', '".$client->getNom()."', '".$client->getCognom()."')";
		$connexio = new db();
		return $connexio->executa($sql);
	}

	public function trobar_nif($clientDB) { //Busca client per nif
		$sql="SELECT COUNT(*) FROM client WHERE nif='".$clientDB->getNif()."'";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function eliminar($client) { //Elimina client per nif
		$sql="DELETE FROM client WHERE nif='".$client->getNif()."'";
		$connexio = new db();
		return $connexio->executa($sql);
	}

	public function llistar() { //Torna tots els clients
		$sql="SELECT * FROM client ORDER BY cognom ASC";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}

	public function modificar($clientDB) { //Modificar client
		$sql="UPDATE client SET nom='".$clientDB->getNom()."',cognom='".$clientDB->getCognom()."' WHERE nif='".$clientDB->getNif()."'";
		$connexio = new db();
		return $connexio->executa($sql);
	}

	public function consultar($clientDB,$camp) { //Mostra clients segons camp
		$sql="SELECT * FROM client";
		if ($camp=="nif") { $sql= $sql." WHERE nif='".$clientDB->getNif()."'"; }
		else if ($camp=="nom") { $sql= $sql." WHERE nom='".$clientDB->getNom()."'"; }
		else if ($camp=="cognom") { $sql= $sql." WHERE cognom='".$clientDB->getCognom()."'"; }
		$connexio = new db();
		return $connexio->executaArray($sql);
	}
	
	public function llistarUnClient($clientDB) { //Torna un client segons nif
		$sql="SELECT * FROM client WHERE nif='".$clientDB->getNif()."'";
		$connexio = new db();
		return $connexio->executaArray($sql);
	}
	
}

?>
