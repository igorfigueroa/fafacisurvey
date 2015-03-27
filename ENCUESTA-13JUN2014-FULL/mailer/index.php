<?php
require("class.phpmailer.php");
require("class.smtp.php");

$link = mysql_connect("localhost", "root", "") or die("No se pudo conectar a la db!");
mysql_select_db("dbtransmana") or die("No se pudo elegir la db!");
$query = "select nombre, tipo, FECHA_HORA from `control` order by FECHA_HORA DESC limit 1";
$result = mysql_query($query) or die("Query failed:$query");   

$body = "<table border='1'>
<tr>
<th>Nombre:</th>
<th>Tipo:</th>
<th>Fecha:</th>
</tr>";

while($row = mysql_fetch_array($result)){
$body.="<tr>";
$body.="<td>" . $row['nombre'] . "</td>";
$body.="<td>" . $row['tipo'] . "</td>";
$body.="<td>" . $row['FECHA_HORA'] . "</td>";
$body.="</tr>";
}

$body.="</table>";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "ifigueroacalderon@gmail.com";
$mail->Password = "G5MqkT5z";

$mail->From = "ifigueroacalderon@gmail.com";
	$mail->FromName = "Tu Nombre";
	$mail->Subject = "Enviar Mail con PHPMailer";
	$mail->AltBody = "";
	$mail->MsgHTML($body);
$mail->AddAttachment("adjunto.txt");

$mail->AddAddress("ifigueroacalderon@gmail.com", "Nombre Destinatario");
$mail->IsHTML(true);
$mail->Send();


?>