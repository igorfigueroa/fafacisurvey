<?php 
$pagina = "encuesta";
date_default_timezone_set('America/Mexico_City');
$error = "";
$fecha = date('Y/m/d h:i:s');
include('.././includes/conexion.php');

if ($_POST) {

		$id_encuesta = "1";
		$cliente = trim($_POST['txtNombre']);
		$empresa = trim($_POST['txtEmpresa']);
		$pedido = trim($_POST['txtPedido']);
		$email = $_POST['txtCorreo'];


		foreach ($_POST['q'] as $cal) {
			$q[] = $cal;
		}

		if ($cliente == "") {
			$error = "<p>Favor de introducir su nombre completo.</p>";
		}

		if ($empresa == "") {
			$error = "<p>Favor de introducir el nombre de su empresa.</p>";
		}

		if ($pedido == "") {
			$error = "<p>Favor de introducir el nombre o numero de pedido a calificar.</p>";
		}

		if ($email == "") {
			$error = "<p>Favor de proporcionar un correo electrónico valido.</p>";
		}
	
		$insertarRespuestasEncuesta = mysql_query("
			INSERT INTO cte_encuesta VALUES ('', '$id_encuesta', '$fecha', '$cliente', '$empresa', '$pedido', '$email')
			") or die(mysql_error());

				if($insertarRespuestasEncuesta) {
					echo "<h1>Insercion exitosa!</h1>";
				} else {
					echo "<h1>Hubo un error!</h1>";
				}

				$ultimaEncuesta = mysql_query("SELECT id from cte_encuesta ORDER BY id DESC LIMIT 1") or die(mysql_error());
				$ultimaId = mysql_fetch_array($ultimaEncuesta);
				$lastId = $ultimaId['id'];

				echo '<h1>'.$lastId.'</h1>';
				var_dump($q);

			$a = 1;

			foreach($q as $item) {
				$insertarCalificaciones = mysql_query("INSERT INTO detalle_cte_encuesta VALUES ('$lastId', $a, '$item')");
				$a = $a + 1;
			}

			header("Location: .././encuesta/index.php?status=enviado");
			exit;
}

?>

<?php 
$pageTitle = "Encuesta de Satisfacción de Cliente";
include('.././includes/header.php');

?>

	<header>
		<img src="../img/logotipo-fafaci.jpg" class="logo" alt="logotipo-fafaci-servicios-industriales">
		<ul>
			<li>Servicios Industriales Fafaci S.A. de C.V.</li>
			<li>(871) 169 81 09 – (871) 169 80 24</li>
			<li>Carr. Estatal ‘La Perla’ S/N Col. La Perla Cp. 27090, Torreón, Coah. México.</li>
		</ul>
	</header>

			<?php 
				if (isset($_GET['status']) AND $_GET['status'] == 'enviado') {
					echo '<div class="envio-encuesta">';
						echo '<div class="icon-container">
								<i class="fa fa-check"></i>
							</div>';
						echo '<h1 class="titulo">¡Muchas Gracias!</h1>';
						echo '<p>Hemos recibido sus respuesta, le agradecemos mucho el tiempo que usted amablemente ha invertido en el llenado de
						esta encuesta; con sus respuestas nos ayudara a mejorar
						los servicios y productos que nuestra Empresa ofrece actualmente. ¡Muchas Gracias!</p>';

						echo '<a class="back-btn" href="http://www.fafaci.com.mx">Visitar Página Principal</a>';
					echo '</div>';
					
				} else { 
			?>

		<div class="saludo-encuesta">
			<div class="contenedor-saludo">
				<!--
					<div class="icon-container">
						<i class="fa fa-briefcase"></i>
					</div>
				-->
				<h1 class="titulo">Encuesta de Satisfacción de Cliente</h1>
				<p>Estimado cliente, con el proposito de mejorar nuestro servicio y productos nos dirigimos a usted de la manera más atenta solicitando su apoyo para el llenado
				del siguiente formulario, mismo que no le tomara más de 3 minutos de su tiempo.</p>

				<p>Sus respuestas serán tratadas de forma confidencial y no serán utilizadas para ningún propósito distinto a 
					la investigación llevada a cabo por <strong>SERVICIOS INDUSTRIALES FAFACI S.A, de C.V.</strong></p>

					<p class="centrado"><strong>¡Muchas Gracias por su Apoyo!</strong></p>
			</div>

		</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="contenedor-encuesta">
					<?php include('.././includes/form-encuesta.php'); ?>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>
		
<?php include('.././includes/footer.php'); ?>