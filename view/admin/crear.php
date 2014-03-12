<h2>Crear recepcionista</h2>

<?php

include('../BD/connectar.php');

if(isset($_POST['dni'])) $dni=$_POST['dni'];
else $dni="";
if(isset($_POST['nom'])) $nom=$_POST['nom'];
else $nom="";
if(isset($_POST['pass'])) $pass=$_POST['pass'];
else $pass="";
if(isset($_POST['confirm'])) $confirm=$_POST['confirm'];
else $confirm="";
?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" name="alta">
<table>
<tr><td>DNI:</td><td><input type="text" name="dni" value="<?php echo $dni ?>"></td></tr>
<tr><td>nom:</td><td><input type="text" name="nom" value="<?php echo $nom ?>"></td></tr>
<tr><td>Contrasenya:</td><td><input type="password" name="pass" value="<?php echo $pass ?>"></td></tr>
<tr><td>Confirma la contrasenya:</td><td><input type="password" name="confirm" value="<?php echo $confirm ?>"></td></tr>
</table>
<input type="hidden" name="accio" value="<?php echo $_POST["accio"] ?>">
<input type="submit" name="afegir" value="Crear recepcionista" onclick="validaDNI()">
</form>

<?php

if(isset($_POST['afegir'])){
	if ($_POST['nom']=="" || $_POST['pass']=="" || $_POST['confirm']=="" || $_POST['dni']==""){
		echo '<p class="error">Falten camps per omplir.</p>';
	}else{
		if ($_POST['pass']!=$_POST['confirm']) echo '<p class="error">Contrasenya no coincident</p>';
		else{
			$dni=$_POST['dni'];
			$nom=$_POST['nom'];
			$pass=md5($_POST['pass']);

			$sql="INSERT INTO usuaris (dni,nom,contrasenya,nivellAcces) VALUES ('".$dni."','".$nom."','".$pass."',2);";

			if($resultat=mysql_query($sql)){
				echo "Recepcionista donat d'alta correctament<br />";
			}else{
				echo $resultat;
				echo "Error";
			}
		}
	}
}
include ('mostraUsuaris.php');
?>
