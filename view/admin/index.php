<?php
session_start();
if ($_SESSION['nivellAcces']==1){
	$user=$_SESSION['usuariHotel'];
	include('../BD/connectar.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Permissos d'usuaris</title>
<link rel="stylesheet" href="../estils.css" />
</head>
<body>

<div class="menu">
	<div class="fLeft"><a href="index.php"><img src="../img/logoHotel.png" alt="Logo Hotel" /></a></div>
	<div class="fRight">
		Usuari: <?php echo $user; ?><br />
		<a href="index.php">Tornar a inici</a> - <a href="../BD/tancar-sessio.php">Tancar Sessió</a>
	</div>
	<div class="clear"></div>	
</div>

<div id="margenes">
	<center>
		<h1>Manteniment d'usuaris de recepcio</h1>
		<?php

		if (!$sqlCon) echo '<p class="error">Error connectant a la base de dades. Comprobi arxiu connectar.php</p>';
		else {
			if (!isset($_POST['accio'])){
				include ('accio.php');
			}else{
				switch ($_POST['accio']) {
					case "Llistar":
						include('mostraUsuaris.php');
						break;				
					case "Crear":
						include('crear.php');
						break;
					case "Canviar":
						include('rename.php');
						break;
					case "Contrasenya":
						include('password.php');
						break;
					case "EliminarU":
						include('eliminar.php');
						break;
				}
			}
			mysql_close($sqlCon);
		}

		?>
	</center>
</div>

</body>
</html>

<?php
}else header("Location: index.php");	
?>
