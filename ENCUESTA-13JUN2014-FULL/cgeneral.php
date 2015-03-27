<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
 ?>

<!DOCTYPE html>

<html>

<head>
<head>
		<title>Fafaci - Resultados Encuesta</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

<body>


 
 <div id="mainLogo">
	<img src="img/logotipo-fafaci.jpg" alt="logotipo-fafaci-servicios-industriales">
	</div>
		<div id="mainHeader">
		<h1>Consulta General</h1>
		
</div>

<div id="mainMenu">
			<ul>
				<li><a href="encuesta.php">Encuesta</a></li>
				<li><a href="exp.php">Exportar a EXCEL</a></li>
				<li><a href="logout.php">Salir</a></li>
			</ul>
		</div>
<br />
<div id="consultaGral">
<?php

				$link = mysql_connect("localhost", "fafac43_fafac43", "1FMJhwGy") or die("No se pudo conectar a la db!");
				mysql_select_db("fafac43_survey") or die("No se pudo elegir la db!");
				mysql_query("SET time_zone='-5:00'");
				$query = "select id_surv, fecha, cliente, empresa, pedido, satisfaccion, profesionalismo, organizacion, calidad, servicio_post_venta, 
				satis_cliente, calidad_servicio, higiene_seguridad, rel_calidad_precio, cap_personal, equipo_herramienta, promedio, 
				recomendacion, comentarios from fafacisurvey ORDER BY fecha DESC";
				$consulta = mysql_query($query) or die("Query failed:$query");
				
				$body = utf8_decode("<table class='tablaConsulta' border='0' cellspacing='0'>
				<tr>
				<th>ID</th>
				<th>Fecha</th>
				<th>Cliente</th>
				<th>Empresa</th>
				<th>Pedido</th>
				<th>Satisfacción</th>
				<th>A1</th>
				<th>A2</th>
				<th>A3</th>
				<th>A4</th>
				<th>A5</th>
				<th>A6</th>
				<th>A7</th>
				<th>A8</th>
				<th>A9</th>
				<th>A10</th>
				<th>Prom</th>
				<th>Recomendación</th>
				<th>Comentarios</th>
				</tr>");

				while($row = mysql_fetch_array($consulta)){
				$body.="<tr>";
				$body.="<td>" . $row['id_surv'] . "</td>";
				$body.="<td>" . $row['fecha'] . "</td>";
				$body.="<td>" . $row['cliente'] . "</td>";
				$body.="<td>" . $row['empresa'] . "</td>";
				$body.="<td>" . $row['pedido'] . "</td>";
				$body.="<td>" . $row['satisfaccion'] . "</td>";
				$body.="<td>" . $row['profesionalismo'] . "</td>";
				$body.="<td>" . $row['organizacion'] . "</td>";
				$body.="<td>" . $row['calidad'] . "</td>";
				$body.="<td>" . $row['servicio_post_venta'] . "</td>";
				$body.="<td>" . $row['satis_cliente'] . "</td>";
				$body.="<td>" . $row['calidad_servicio'] . "</td>";
				$body.="<td>" . $row['higiene_seguridad'] . "</td>";
				$body.="<td>" . $row['rel_calidad_precio'] . "</td>";
				$body.="<td>" . $row['cap_personal'] . "</td>";
				$body.="<td>" . $row['equipo_herramienta'] . "</td>";
				$body.="<td>" . $row['promedio']. "</td>";
				$body.="<td>" . $row['recomendacion'] . "</td>";
				$body.="<td>" . $row['comentarios'] . "</td>";
				$body.="</tr>";
				}

				$body.="</table>";

				echo $body;
			?>
</div>

<div id="mainFooter">
		<p>WWW.FAFACI.COM.MX</p>
		<strong><p>COMPROMETIDOS CON LA MEJORA CONTINUA.</p></strong>
		
		</div>


</body>

</html>