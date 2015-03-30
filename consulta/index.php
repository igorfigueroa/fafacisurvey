<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['usuario'])) 
{
  header('Location: ../login'); 
  exit();
}


$pageTitle = "Consulta General";
$pagina = "";
include('../includes/conexion.php');
include('../includes/header.php');

 ?>

<div id="mainMenu">

					<ul>
						<li>
							<a class="" href="../"><i class="fa fa-arrow-left"></i> Volver a Menu Principal</a>
						</li>
					</ul>

</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="table-titles">CONSULTA GENERAL</h2>
			<div id="consultaGral">
				<table class="table table-condensed table-responsive table-bordered table-general">
					<thead>
						<th>#</th>
						<th>Fecha</th>
						<th>Cliente</th>
						<th>Empresa</th>
						<th>Pedido/Trabajo</th>
						<th>Email Cliente</th>
						<th>Acciones</th>
					</thead>

					<tbody>
						<?php
						$clientAnswers = mysql_query("
							SELECT id, fecha, cte_nombre, cte_empresa, cte_pedido, cte_email FROM cte_encuesta
							") or die ("Hubo un error");
						
						while ($vistaEncuestas = mysql_fetch_array($clientAnswers)) {
							echo '<tr>
									<td>'.$vistaEncuestas['id'].'</td>
									<td>'.$vistaEncuestas['fecha'].'</td>
									<td>'.$vistaEncuestas['cte_nombre'].'</td>
									<td>'.$vistaEncuestas['cte_empresa'].'</td>
									<td>'.$vistaEncuestas['cte_pedido'].'</td>
									<td>'.$vistaEncuestas['cte_email'].'</td>
									<td style="text-align: center;"><a href="respuestas.php?id='.$vistaEncuestas['id'].'"><i class="fa fa-eye fa-lg"></i></a></td>
								</tr>';
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