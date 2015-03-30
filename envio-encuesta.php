<?php
	$dest = $_GET['dest'];
	$pagina = "inicio";
	$pageTitle = "Menu Principal";
	include('includes/header.php');
	$cssPath = 'css/style.css';
?>

		<div class="envio-encuesta">
			<h1>¡ENVIADO!</h1>
			<p>Se ha enviado con éxito la encuesta de satisfacción de cliente al correo electrónico especificado: </p>
			<ul>
				<li>
					<?php echo $dest; ?>	
				</li>
			</ul>

			<a class="back-btn" href="./"><i class="fa fa-arrow-left"></i> Volver a Menu Principal</a>
		</div>

<?php 
include('includes/footer.php');
?>