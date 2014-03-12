<h2>Canviar contrasenya</h2>

<?php 

if(isset($_POST['user'])) $user=$_POST['user'];
else $user="";
if(isset($_POST['pass'])) $pass=$_POST['pass'];
else $pass="";
if(isset($_POST['confirm'])) $confirm=$_POST['confirm'];
else $confirm="";
?>
<script type="text/javascript">
/*Funcio que ens valida que ni hi hagin camps buits*/
function valida() {
		if (!document.canviarPass.user.value) alert ('Introdueix nom');
		else if (!document.canviarPass.pass.value) alert ('Introdueix el password');
		else if (!document.canviarPass.confirm.value) alert ('Introdueix la segona password');
}
</script>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" name="canviarPass">
<table><tr><td>Usuari:</td><td><input type="text" name="user" value="<?php echo $user ?>" /></td></tr>
<tr><td>Contrasenya:</td><td><input type="password" name="pass" value="<?php echo $pass ?>" /></td></tr>
<tr><td>Confirmar contrasenya:</td><td><input type="password" name="confirm" value="<?php echo $confirm ?>" /></td></tr></table>
<input type="hidden" name="accio" value="<?php echo $_POST["accio"] ?>">
<input type="submit" name="contrasenya" value="Canviar" onclick="valida()">
</form>
<?php

if(isset($_POST['contrasenya'])){// CANVIAR CONTRASENYA
	if ($_POST['user']=="" || $_POST['pass']=="" || $_POST['confirm']==""){
		echo '<p class="error">Falten camps per omplir.</p>';
	}else{
		if ($_POST['pass']!=$_POST['confirm']) echo '<p class="error">Contrasenya no coincident</p>';
		else{
			$contrasenya=md5($_POST['pass']);
			$sql="UPDATE usuaris SET contrasenya='".$contrasenya."' WHERE nom='".$_POST['user']."'";
			$execucio=mysql_query($sql);
			if (!$execucio) echo '<p class="error">Error canviant contrasenya.<br />No es troba l\'usuari</p>';
			else{				
				echo '<p class="sql">Contrasenya canviada correctament</p>';
			}
		}
	}
}
include ('mostraUsuaris.php');
?>