<?php 

require_once("interface_db.php");

class db implements interface_db{
	private $server;
	private $username;
	private $password;
	private $dbname;
	private $link;
	
	public function __construct(){
		$this->setServer('localhost');
		$this->setUsername('root');
		$this->setPassword('');		
	}
		
	public function getServer(){
		return $this->server;
	}

	public function setServer($value){
		$this->server = 'localhost';
	}
	
	public function getUsername(){
		return $this->username;
	}

	public function setUsername($value){
		$this->username = 'root';
	}
	
	public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = '';
	}
	
	public function getDbname(){
		return $this->dbname;
	}

	public function setDbname($value){
		$this->dbname = $value;
	}
	
	public function connect(){	
		$this->link=mysql_connect($this->getServer(),$this->getUsername(),$this->getPassword());			
		if (!$this->link) {
			die('Error, no és possible connectar a: ' . mysql_error());
		}				
		return $this->link;
	}
	
	public function bd($database){
		$this->dbname = mysql_select_db('hotel', $this->link);
		if (!$this->dbname) {
			die ('Error, no es pot fer servir la base de dades: ' . mysql_error());
		}
	}
	
	public function close()	{
		return mysql_close($this->link);
	}
	
	public function error()	{
		return mysql_error($this->link);
	}
	
	public function executa($sql){ //Executar Inserts, Updates, Deletes i Selects simples. Retorna un sol registre/dada
		$connexio = $this->connect();
		$this->bd('hotel');
		$consulta=mysql_query($sql, $connexio) or die('Error, la consulta ha fallat: '.$this->error());
		$this->close();
		return $consulta;
	}
	
	public function executaArray($sql){	//Per executar Selects, torna un array d'objectes
		$connexio = $this->connect();
		$this->bd('hotel');
		$objArray=array();
		$r=array();
		$consulta=mysql_query($sql, $connexio) or die('Error, la consulta ha fallat: '.$this->error());
		while ($r=mysql_fetch_array($consulta)) { $objArray[]=$r; }
		$this->close();
		return $objArray;
	}
	
			
}

?>