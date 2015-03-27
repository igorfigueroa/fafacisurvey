<?php 
$host = "localhost";
$usuario = "root";
$pass = "";


$link = mysql_connect($host, $usuario, $pass) or die("No se pudo conectar a la base de datos!");
mysql_select_db("fafacisurvey") or die("No se pudo elegir la base de datos!");
mysql_query("SET NAMES 'utf8'");
?>