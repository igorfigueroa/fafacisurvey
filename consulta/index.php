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
	/*
	for ($x = 0; $x < 45; $x++) {
		$insertar = mysql_query("INSERT INTO cte_encuesta VALUES ('', '1', '2015-03-14 10:12:42', 'Igor Figueroa', 'GOKU', 'PROYECTO PRUEBA', 'igor.figueroa@com.mx')")
		or die (mysql_error());
	}
	*/

$contador = mysql_query("SELECT COUNT(*) as total FROM cte_encuesta") or die("hubo un error en el contador");
$c = mysql_fetch_array($contador);

$total = $c['total']; // TOTAL DE REGISTROS DE LA CONSULTA
$porPagina = 10; // REGISTROS A MOSTRAR POR PAGINA
$paginas = ceil($total / $porPagina); // DETERMINAMOS NUMERO DE PAGINAS 

$page = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$startAt = $porPagina * ($page - 1);

$query = mysql_query("
	SELECT * FROM cte_encuesta LIMIT $startAt, $porPagina
") or die (mysql_error());

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

			<ul class="consulta-pag">
				<li>Páginas: </li>
					<?php
						for ($i = 1; $i <= $paginas; $i++) {
							echo '<li><a href="index.php?pagina='.$i.'">'.$i.'</a></li>';
						}
					?>
			</ul>



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
							SELECT id, fecha, cte_nombre, 
							cte_empresa, cte_pedido, cte_email 
							FROM cte_encuesta
							LIMIT $startAt, $porPagina
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