<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login'); 
  exit();
}

$pageTitle = "Ver Respuestas";
$pagina = "";
include('../includes/conexion.php');
include('../includes/header.php');

$id = $_GET['id'];

 ?>
 
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="consultaGral">
				
				<div id="mainMenu">
					<ul>
						<li>
							<a href="./" class="custom-btn"><i class="fa fa-arrow-left"></i> Volver a Consulta General</a>
						</li>
					</ul>
				</div>
				
	
				<h2 class="table-titles">RESPUESTAS DEL CLIENTE</h2>
				<table class="table table-condensed table-responsive table-bordered table-info-cliente">
					<tr>
						<th>Fecha</th>
						<th>Cliente</th>
						<th>Empresa</th>
						<th>Pedido</th>
						<th>Email</th>
					</tr>

					<tr>
						<?php 
							$getClient = mysql_query("SELECT fecha, cte_nombre, cte_empresa, cte_pedido, cte_email
								FROM cte_encuesta WHERE id = $id") or die (mysql_error());

							while ($vistaCliente = mysql_fetch_array($getClient)) {
								echo 
								'
									<tr>
										<td>'.$vistaCliente['fecha'].'</td>
										<td>'.$vistaCliente['cte_nombre'].'</td>
										<td>'.$vistaCliente['cte_empresa'].'</td>
										<td>'.$vistaCliente['cte_pedido'].'</td>
										<td>'.$vistaCliente['cte_email'].'</td>
									</tr>
								';
							}

						?>
					</tr>
				</table>

				
				<table class="table table-condensed table-bordered table-responsive table-detalle">
					<thead>
						<th>Atributo</th>
						<th>Respuesta</th>
					</thead>

					<tbody>
						<?php 
							$getAnswers = mysql_query("
								SELECT detalle_cte_encuesta.id_atributo, detalle_cte_encuesta.atributos_cal, atributos_encuesta.atributo_desc
								FROM detalle_cte_encuesta
								JOIN atributos_encuesta ON atributos_encuesta.id_atributo = detalle_cte_encuesta.id_atributo
								JOIN cte_encuesta ON cte_encuesta.id = detalle_cte_encuesta.id_encuesta
								WHERE cte_encuesta.id = $id
								") or die (mysql_error());

							$i = 1;
							while ($answersView = mysql_fetch_array($getAnswers)) {
								echo '<tr>
										<td><strong>'.$i.')</strong> '.$answersView['atributo_desc'].'</td>
										<td>'.$answersView['atributos_cal'].'</td>
									</tr>';
								$i++;			
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php 
	include('../includes/footer.php');
?>