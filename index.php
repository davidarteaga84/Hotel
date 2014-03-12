<?php
session_start();
if (isset($_SESSION['nivellAcces'])){ 
	if ($_SESSION['nivellAcces']==2) { header("Location: view/index.php"); } 
	else if ($_SESSION['nivellAcces']==1) { header("Location: admin/index.php"); }
} else { header("Location: view/login.php"); }
?>
