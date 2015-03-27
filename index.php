<?php 

$pagina = "inicio";
$pageTitle = "Menu Principal";
include('includes/header.php');
$cssPath = 'css/style.css';
?>

	<header>
		<img src="img/logotipo-fafaci.jpg" alt="logotipo-fafaci-servicios-industriales">
	</header>

		<div id="mainMenu">
			<h2>Menu Principal</h2>

			<ul>
				<li>
					<a class="" href="encuesta/"><i class="fa fa-file"></i> Encuesta Satisfacción de Cliente</a>
				</li>

				<li>
					<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope"></i> Enviar Encuesta por Correo</a>
				</li>

				<li>
					<a class="" href="consulta/"><i class="fa fa-search"></i> Consulta General</a></li>
				</li>


			</ul>

		</div>
		
<?php
include('includes/modal-envio.php');
include('includes/footer.php');
?>