<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gesti&oacute; d'hotel</title>
<link rel="stylesheet" href="estils.css" />
</head>
<body>

<div class="menu">
	<div class="fLeft"><a href="index.php"><img src="img/logoHotel.png" alt="Logo Hotel" /></a></div>
	<div class="fRight">
		<b>Usuari:</b> No loguejat<br />
		<a href="index.php">Tornar a inici</a> - Tancar Sessi&oacute;
	</div>
</div>
<div class="clear"></div>
	
<div id="margenes">
<h1>Identificaci&oacute; d'usuari</h1>

<table>
<form action="../controller/validaUsuari.php" method="post">
	<tr>
		<td>NIF:</td>
		<td><input type="text" size="25" name="nif" value="" /></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" size="25" name="pass" value="" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Log in" class="css3button" /></td>
	</tr>
</form>
</table>	

<?php include('pie.php'); ?>