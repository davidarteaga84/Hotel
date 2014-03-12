<?php
$fitxer = basename($_SERVER['PHP_SELF']);
$pieces = explode( ".", $fitxer); 
$accio = $pieces[0];
?>

<script>
	function validarData(data){
		$dataCorrecta=false; 
		var errorDia=false,errorMes=false,errorAny=false;
		var temp;
		var dia,mes,any;
		data=data.split("/");
		dia=data[0];
		mes=data[1];
		any=data[2];
		if (isNaN(any)) { errorAny=true; }
		if (isNaN(mes)) { errorDia=true; }
		else if (mes<1 || mes>12) { errorMes=true; }
		if (isNaN(dia)) { errorDia=true; }
		else if (dia<0 || dia>32) { errorDia=true; }
		else if ((mes==4 || mes==6 || mes==9 || mes==11) && dia==31) { errorDia=true; }
		else if (mes==2 && dia>29) { errorDia=true; }
		else if (mes==2 && dia==29){
			errorDia=true;
			if (any%100!=0 && any%4==0){
				errorDia=false;
			}else{
				if (any%100==0){
					temp=any/100;
					if (temp%4==0){
						errorDia=false;
					}
				}
			}
		}
		if (errorDia==true || errorMes==true || errorAny==true) { alert ('Error en la data. Format correcte DD/MM/AAAA'); }
		else { $dataCorrecta=true; }

		return $dataCorrecta; 
	}

	function validaDNI(dni) {
		var resultat = true;
		var numero = dni.substr(0,dni.length-1);
		var let = dni.substr(dni.length-1,1);
		let = let.toUpperCase();
		numero = numero % 23;
		var letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
		letra = letra.substring(numero,numero+1);
		if (letra != let) { 
			resultat = false; 
			alert('DNI incorrecte'); 
		}
		return resultat;
	}

<?php 
if ($accio=="altaClient") { ?>
	function valida() {
		if (!document.altaClient.nom.value) { alert ('Introdueix nom'); }
		else if (!document.altaClient.cognom.value) { alert ('Introdueix cognom'); }
		else return validaDNI(document.altaClient.nif.value);
		return false;
	}
<?php } ?>

<?php 
if ($accio=="modificaClient") { ?>
	function valida() {
		if (!document.modificaClient.nom.value) { alert ('Introdueix nom'); }
		else if (!document.modificaClient.cognom.value) { alert ('Introdueix cognom'); }
		else return true;
		return false;
	}
<?php } ?>

<?php 
if ($accio=="consultarClient") { ?>
	function validaNom() {
		if (!document.name.nom.value) { 
			alert ('Introdueix un nom'); 
			return false; 
		}
		return true;
	}
	function validaCognom() {
		if (!document.surname.cognom.value) { 
			alert ('Introdueix un cognom'); 
			return false; 
		}
		return true;	
	}
	function validaNif() {
		if (!document.id.dni.value) { 
			alert ('Introdueix un DNI'); 
			return false;
		}
		return validaDNI(document.id.dni.value); 
	}
<?php } ?>

<?php 
if ($accio=="altaTarifa") { ?>
	function valida() {
		if (!document.altaTarifa.categoria.value) { alert ('Introdueix nom de categoria'); }
		else if (!document.altaTarifa.preu.value) { alert ('Introdueix preu de categoria'); }
		else return true;
		return false;
	}
<?php } ?>

<?php 
if ($accio=="modificaTarifes") { ?>
	function valida() {
		if (!document.altaClient.nom.value) { alert ('Introdueix nom'); }
		else if (!document.altaClient.cognom.value) { alert ('Introdueix cognom'); }
		else return true;
		return false;
	}
<?php } ?>

<?php 
if ($accio=="reservarHabitacio") { ?>
	function valida() {
		dataEntrada=document.reservarHabitacio.dataEntrada.value;
		dataSortida=document.reservarHabitacio.dataSortida.value;
		if (!dataEntrada) { alert ('Introdueix data d\'entrada'); }
		else if (!dataSortida) { alert ('Introdueix data de sortida'); }
		else if (validarData(dataEntrada) && validarData(dataSortida)) { return true; }
		return false;
	}
<?php } ?>

</script>
