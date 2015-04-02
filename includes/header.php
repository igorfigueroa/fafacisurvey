<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title><?php echo $pageTitle.' ';?>| FAFACI</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="
			<?php
				if($pagina == "inicio")  {
					echo 'css/styles.css';
				} else {
					echo '../css/styles.css';
				}
			?>
		">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	</head>
	
	<body>
			<header>
				<?php 
					if ($pagina != "inicio") {
						echo '<img src="../img/logotipo-fafaci.jpg" alt="logotipo-fafaci-servicios-industriales">';
					} else {
						echo '<img src="img/logotipo-fafaci.jpg" alt="logotipo-fafaci-servicios-industriales">';
					}
				?>

				<ul>
					<li>Servicios Industriales Fafaci S.A. de C.V.</li>
					<li>(871) 169 81 09 – (871) 169 80 24</li>
					<li>Carr. Estatal ‘La Perla’ S/N Col. La Perla Cp. 27090, Torreón, Coah. México.</li>
				</ul>
			</header>