<?php
session_start();
if (isset($_SESSION['nivellAccesHotel']) && isset($_SESSION['usuariHotel'])) { 
	if ($_SESSION['nivellAccesHotel']==1) { header("Location: admin/index.php"); }
	else if ($_SESSION['nivellAccesHotel']==2) { header("Location: gestio.php"); }
	else { header("Location: login.php"); }
} else { header("Location: login.php"); }
?>