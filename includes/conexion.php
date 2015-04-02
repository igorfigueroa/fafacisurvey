<?php 
/*
$host = "localhost";
$usuario = "root";
$pass = "";
*/

$host = "localhost";
$usuario = "fafac43_fafac43";
$pass = "1FMJhwGy";
$db = "fafac43_survey";


$link = mysql_connect($host, $usuario, $pass) or die("No se pudo conectar a la base de datos!");
mysql_select_db($db) or die("No se pudo elegir la base de datos!");
mysql_query("SET NAMES 'utf8'");
?>