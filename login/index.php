<?php
$pagina = "";
$pageTitle = "Iniciar Sesión";
include('.././includes/header.php'); ?>

	<header>
		<img src="../img/logotipo-fafaci.jpg" alt="logotipo-fafaci-servicios-industriales">
	</header>
	

	<div id="loginForm">

	
		

		<form action="validar_usuario.php" method="post">
	
			 <table class="table table-condensed table-responsive table-bordered">

			  <tr>
			   	<th><label for="admin">Usuario</label></th>
				<th><label for="password_usuario">Contraseña</label></th>
				<th></th>
			  </tr>

			  <tr>
				   <td><input class="form-control" id="admin" name="admin" required="required" type="text" /></td>
				   <td><input class="form-control" id="password_usuario" name="password_usuario" required="required" type="password"/></td>
				   <td><button type="submit" class="btn-login"><i class="fa fa-arrow-right"></i> Iniciar Sesión</button></td>
			  </tr>
			</table>

		</form>
	
	</div>
	
<?php include('.././includes/footer.php'); ?>