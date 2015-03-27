<!DOCTYPE html>

<html>
	<head>
		<title>Encuesta enviada - FAFACI</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	
	<body>
	
	<div id="mainLogo">
	<img src="img/logotipo-fafaci.jpg" alt="logotipo-fafaci-servicios-industriales">
	</div>
	
		<div id="mainHeader">
		<h1>Encuesta de Satisfacción de Cliente</h1>
		</div>
		
		
		<div id="mainAgradecimiento">
			<h2>¡Muchas Gracias!</h2>
			<div id="txtLeyenda">
			<p>Hemos recibido sus respuestas con éxito, le agradecemos el tiempo que usted amablemente 
			invirtio en el llenado de la encuesta, sus respuestas nos ayudaran enormemente a mejorar cada uno de los puntos debiles de nuestra empresa.</p>
			</div>
			<img src="img/mail-icon.png" alt="respuestas-recibidas-correctamente">
		</div>
		

		
		<div id="mainFooter">
		<p>WWW.FAFACI.COM.MX</p>
		<p>COMPROMETIDOS CON LA MEJORA CONTINUA.</p>
		</div>
		
	</body>
	
</html>

<?php
header('Content-Type: text/html; charset=UTF-8'); 
error_reporting (0);
require("mailer/class.phpmailer.php");
require("mailer/class.smtp.php");


$cliente = $_POST['txtNombre'];
$empresa = $_POST['txtEmpresa'];
$q1 = $_POST['sltSatis'];
$q2a1 = $_POST['valor1'];
$q2a2 = $_POST['valor2'];
$q2a3 = $_POST['valor3'];
$q2a4 = $_POST['valor4'];
$q2a5 = $_POST['valor5'];
$q2a6 = $_POST['valor6'];
$q2a7 = $_POST['valor7'];
$q2a8 = $_POST['valor8'];
$q2a9 = $_POST['valor9'];
$q2a10 = $_POST['valor10'];
$q3 = $_POST['radioRecomendacion'];
$q4 = $_POST['txtComent'];
$p = ($q2a1 + $q2a2 + $q2a3 + $q2a4 + $q2a5 + $q2a6 + $q2a7 + $q2a8 + $q2a9 + $q2a10) / 10;

$emp = utf8_decode($empresa);
$cl = utf8_decode($cliente);
$comentarios = utf8_decode($q4);

//INSERTAR DATOS
$link = mysql_connect("localhost", "fafac43_fafac43", "figueroa00") or die("No se pudo conectar a la base de datos!");
mysql_select_db("fafac43_survey") or die("No se pudo elegir la base de datos!");
$query = "insert into `fafacisurvey` (`cliente`,`empresa`, `satisfaccion`, `profesionalismo`,`organizacion`,`calidad`,`servicio_post_venta`, `satis_cliente`,`calidad_servicio`, `higiene_seguridad`,`rel_calidad_precio`,`cap_personal`,`equipo_herramienta`, `promedio`,`recomendacion`,`comentarios`) 
values('$cl','$emp','$q1','$q2a1','$q2a2','$q2a3','$q2a4','$q2a5','$q2a6','$q2a7','$q2a8','$q2a9','$q2a10','$p','$q3','$comentarios')";
$result = mysql_query($query) or die("Query failed:$query");   

$body ="
<html>
<head>
<title>Envio de Sugerencias</title>
<style type='text/css'>
<!--
body {
background: url('http://www.shdesigns.com.mx/firmas/fafaci/pattern.png');
font-family: 'Helvetica', 'Droid-sans', Verdana, sans-serif;
}

#mailLogo {
width: 75%;
padding: 5px;
margin: 0 auto;
background: #fff;
text-align: center;
border: 1px solid gray;
}

#mainMail {
padding: 5px;
width: 75%;
margin: 0 auto;
border: 1px solid gray;
background: #fff;
}

#tabla1 {
width: 100%;
text-align: center;
}

#tabla1 th{
background: #893600;
color: #fff;
}

#tabla1 td {
color: #666;
border:1px solid gray;
}

#tabla2 th {
background: #893600;
color: #fff;
}

#tabla2 td {
color: #666;
border:1px solid gray;
}

#headerMail {
width: 100%;
margin: 0 auto;
background: #d35400;
border-bottom:5px solid #c0392b;
text-align: center;
}
#headerMail h1 {
font-size: 24px;
color: #fff;
}

#headerMail h2 {
font-size: 16px;
color: #ccc;
margin-top: -15px;
}

#tableClient {
width: 50%;
text-align: center;
}

#tableClient th {
background: #893600;
color: #fff;
}

#tableClient td {
color: #666;
border:1px solid gray;
}

#mailFooter {
width: 100%;
margin: 0 auto;
text-align: center;
background: #d35400;
height: 90px;
font-size: 14px;
border-top:5px solid #c0392b;
}
#mailFooter h3, p{
margin-top: -25px;
color: #fff;
}

#mailFooter h2{
color: #fff;
text-transform: uppercase;
}


</style>
</head>

<body>
<div id='mailLogo'>
<img src='http://www.shdesigns.com.mx/firmas/fafaci/logo-fafaci.jpg' alt='logotipo-fafaci'>
</div>
<div id='mainMail'>

<div id='headerMail'>
<h1>Encuesta de Satisfacción de Cliente</h1>
<h2>Respuestas del Cliente</h2>
</div>
<br>
<table id='tableClient' border='0' cellspacing='0' cellpadding='1'>
	<tr>
		<th>Cliente</th>
		<th>Empresa</th>
	</tr>
	
	<tr>
		<td>$cliente</td>
		<td>$empresa</td>
	</tr>
</table>
<br>
<table id='tabla1' border='0' cellspacing='0' cellpadding='1'>
		<tr>
		<th width='15%'>Satisfacción</th>
		<th width='15%'>Recomendación</th>
		<th width='70%'>Comentarios</th>
		</th>
		</tr>
		<tr>
			<td>$q1</td>
			<td>$q3</td>
			<td>$q4</td>
		</tr>
		</table>
		
		<br>
		<center>
		<table id='tabla2' border='0' cellspacing='0' cellpadding='1'>
		<tr>
		<th>Atributo</th>
		<th>Valoración</th>
		</tr>
		
		<tr>
		<td>Profesionalismo</td>
		<td>$q2a1</td>
		</tr>
		
		<tr>
		<td>Organización</td>
		<td>$q2a2</td>
		</tr>
		
		<tr>
		<td>Calidad del producto</td>
		<td>$q2a3</td>
		</tr>
		
		<tr>
		<td>Servicio post-venta</td>
		<td>$q2a4</td>
		</tr>
		
		<tr>
		<td>Satisfacción del cliente</td>
		<td>$q2a5</td>
		</tr>
		
		<tr>
		<td>Calidad del servicio</td>
		<td>$q2a6</td>
		</tr>
		
		<tr>
		<td>Higiene y seguridad</td>
		<td>$q2a7</td>
		</tr>
		
		<tr>
		<td>Relación calidad-precio</td>
		<td>$q2a8</td>
		</tr>
		
		<tr>
		<td>Capacitación del personal</td>
		<td>$q2a9</td>
		</tr>
		
		<tr>
		<td>Equipo y herramienta de trabajo</td>
		<td>$q2a10</td>
		</tr>
		
		
		</table>
		<center>
		
		<div id='mailFooter'>
		<h2>Servicios Industriales Fafaci S.A. de C.V.<h2>
		<h3>Comprometidos con la mejora continua.</h3>
		<p>www.fafaci.com.mx</p>
		</div>
		
		</div>
		
		
		</body>";
		
		

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = ""; //ssl//
$mail->Host = "mail.shdesigns.com.mx";
$mail->Port = 587;
$mail->Username = "ifigueroa@shdesigns.com.mx";
$mail->Password = "T8M4SLgh";

$mail->From = "ifigueroa@shdesigns.com.mx";
	$mail->FromName = "Igor Figueroa C.";
	$mail->Subject = "Respuestas Encuesta Satisfacción de Cliente";
	$mail->AltBody = "";
	$mail->MsgHTML($body);
$mail->AddAttachment("adjunto.txt");

$mail->AddAddress("ifigueroa@shdesigns.com.mx", "Igor Figueroa");
//$mail->AddAddress("igor.figueroa@transmana.com", "Igor Figueroa");
//$mail->AddAddress("rh@fafaci.com.mx", "Karina Talamantes");

$mail->IsHTML(true);

//Codificacio UTF-8
$mail->CharSet = 'UTF-8';

$mail->Send();
?>

<?
error_reporting(0);
?>