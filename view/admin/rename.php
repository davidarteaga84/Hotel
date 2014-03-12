<h2>Canviar nom</h2>
<?php 

if(isset($_POST['user'])) $user=$_POST['user'];
else $user="";
if(isset($_POST['nom'])) $nom=$_POST['nom'];
else $nom="";
?>
<script type="text/javascript">
/*Funcio que ens valida que no hi hagin camps buits*/
function valida() {
	if (!document.renombrar.user.value) alert ('Introdueix un nom d\'usuari');
	else if (!document.renombrar.nom.value) alert ('Introdueix el nom nou');
}
</script>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<table>
		<tr>
			<td>Modificar recepcionista: </td>
			<td>
				<select name="modifica">
				<?php 
					include('BD/connectar.php');
					$sql="SELECT dni,nom FROM usuaris";
					$execucio=mysql_query($sql);
					if (!$execucio) echo '<p class="error">Error carregant usuaris.</p>';
					else{				
						while ($row=mysql_fetch_assoc($execucio)){
							echo '<option value="'.$row["dni"].'">'.$row["nom"].'</option>';
						}
					}
				?>
				</select>
				<input type="hidden" name="accio" value="<?php echo $_POST["accio"]; ?>" />
				<input type="submit" name="submit" value="Modificar" />
			</td>
		</tr>
	</table>
</form>

<?php

if (isset($_POST['submit'])){
	$modi=$_POST['modifica'];
	$sql="SELECT * FROM usuaris WHERE nif='$modi'";
	$execucio=mysql_query($sql);			
	if (!$execucio) echo '<p class="error">Error modificant usuari.</p>';
	else{	
		$row=mysql_fetch_assoc($execucio);?>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<table>
				<tr><td>Usuari sel·leccionat:</td><td><?php echo $row['nif'];?></td></tr>
				<tr><td>Nom:</td><td><input type="text" value="<?php echo $row['nom'];?>" name="nom" /></td></tr>
				<input type="hidden" name="modi" value="<?php echo $modi;?>" />
				<input type="hidden" name="accio" value="<?php echo $_POST["accio"]; ?>" />
				<tr><td></td><td><input type="submit" name="submit2" value="Guarda usuari" /></td></tr>
			</table>
		</form>
<?php
	}
}
if (isset($_POST['submit2'])){
	include('BD/connectar.php');
	$sql="UPDATE usuaris SET nom='".$_POST['nom']."' WHERE nif='".$_POST['modi']."'";	
	$execucio=mysql_query($sql);
	if (!$execucio) echo '<p class="error">Error modificant recepcionista.</p>';
	else header ("Location: index.php");		
}

include ('mostraUsuaris.php');
?>







