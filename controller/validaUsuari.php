<?php
session_start();
$nif=$_POST['nif'];
$pass=md5($_POST['pass']);

include('../model/DAO/connectar.php');
$result = mysql_query("SELECT dni,nom,contrasenya,nivellAcces FROM usuaris WHERE dni='".$nif."'");
$row = mysql_fetch_array($result);

if($row['dni']==$nif && $row['contrasenya']==$pass){ 
	$_SESSION['usuariHotel']=$row['nom'];
    if ($row["nivellAcces"]==1){
		$_SESSION['nivellAccesHotel']=1;
		header("Location: ../view/admin/index.php"); 
	} else if ($row["nivellAcces"]==2){
		$_SESSION['nivellAccesHotel']=2;
		header("Location: ../view/gestio.php"); 
	}
}else { header("Location: ../view/login.php"); }
?>