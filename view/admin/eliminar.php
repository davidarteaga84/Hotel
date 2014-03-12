<h2>Eliminar usuari</h2>

<?php 
include('../BD/connectar.php');
include('../BD/connectar-bd.php');
if(isset($_POST['dni'])) $dni=$_POST['dni'];
else $dni="";
?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" name="eliminar">
<table><tr><td>DNI:</td><td><input type="text" name="dni" value="<?php echo $dni ?>" /></td></tr>
<input type="hidden" name="accio" value="<?php echo $_POST["accio"] ?>">
<input type="submit" name="elimina" value="Eliminar" onclick="validaDNI()"><!-- Onclick cridem a la funció validaDNI() -->
</form>

<?php 

if(isset($_POST['elimina'])){
	if ($_POST['dni']==""){
		echo '<p class="error">Falten camps per omplir.</p>';
	}else{
		$sql="Delete From usuaris Where dni='".$dni."'";
		$execucio=mysql_query($sql);
		
		if (!$execucio) echo '<p class="error">Error esborrant usuari.<br />Comproba si has introduït correctament les dades.</p>';
		else{
			echo '<p class="sql">Usuari esborrat correctament</p>';
		}
	}
}
include ('mostraUsuaris.php');
?>