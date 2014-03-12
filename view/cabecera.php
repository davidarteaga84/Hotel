<?php
session_start();
if (isset($_SESSION['nivellAccesHotel']) && isset($_SESSION['usuariHotel'])) { $usu=$_SESSION['usuariHotel']; }
else { header("Location: login.php"); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Gesti&oacute; d'hotel</title>
<link rel="stylesheet" href="estils.css" />
<?php 
include('includes/navega.php'); 
include('includes/validacions.php'); 
?>
</head>
<body>

<?php include('menu.php'); ?>
<div id="margenes">
