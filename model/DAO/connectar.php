<?php
$server="localhost";
$usuaridb="root";
$passdb="";
$db="hotel";

//Passar a model DAO
$sqlCon=mysql_connect($server,$usuaridb,$passdb);
mysql_select_db($db,$sqlCon);

?>