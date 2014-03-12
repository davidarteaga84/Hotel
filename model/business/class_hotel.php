<?php

class hotel {
	private $nom;
	private $poblacio;
	private $provincia;
	private $cp;
	
	public function __construct($nom,$poblacio,$provincia,$cp) {
		$this->nom = $nom;
		$this->poblacio = $poblacio;
		$this->provincia = $provincia;
		$this->cp = $cp;
	}	
}

?>
