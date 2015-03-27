<?php 

if ($_POST) {

		$cliente = trim($_POST['txtNombre']);
		$empresa = trim($_POST['txtEmpresa']);
		$pedido = trim($_POST['txtPedido']);
		$email = $_POST['txtCorreo'];
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
		$q4 = trim($_POST['txtComent']);

		if ($cliente == "" OR $empresa == "" or $pedido == "" or $email == "") {
			echo "<h1>Hubo un error, favor de rellenar todos los datos requeridos. Intenta nuevamente por favor</h1>";
			exit;
		}
}

?>