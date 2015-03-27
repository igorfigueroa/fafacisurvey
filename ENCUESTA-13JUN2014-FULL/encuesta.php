<!DOCTYPE html>

<html>
	<head>
		<title>Fafaci - Encuesta Satisfacción de Cliente</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	<body>
	<div id="mainLogo">
	<img src="img/logotipo-fafaci.jpg" alt="logotipo-fafaci-servicios-industriales">
	</div>
		<div id="mainHeader">
		<h1>Encuesta de Satisfacción de Cliente</h1>
		
		<div id="mainSaludo">
		<p>Estimado cliente, con el proposito de mejorar nuestro servicio y productos nos dirigimos a usted de la manera más atenta solicitando su apoyo para el llenado
		del siguiente formulario, mismo que no le tomara más de 3 minutos de su tiempo. 
		Por su apoyo, gracias. </p>
		</div>
		<!-- <div id="mainThx">
		<p>Atte. <br>Servicios Industriales Fafaci S.A. de C.V.</p>
		</div> -->
		
		</div>
		
	<div id="mainForm">
		
	<form name="encuestaCalidad" action="envio.php" method="post">
		
		
	<fieldset class="field">
		<legend class="leg">Datos Cliente</legend>
		
		<div class="contenedor-tabla">
			<div class="contenedor-fila">
				<div class="contenedor-columna">
					<p><strong>Proyecto o No. de Pedido:</strong>
					<input type="text" name="txtPedido" size="45"></p>
				</div>
				</div>
				
				<div class="contenedor-fila">
				<div class="contenedor-columna">
					<p><strong>Introduzca su Nombre:</strong></p>
					<input type="text" name="txtNombre" size="45">
				</div>
				<div class="contenedor-columna">
				<p><strong>Empresa:</strong></p>
				<input type="text" name="txtEmpresa" size="45">
				</div>
				</div>
		</div>

	</fieldset>
	
	<fieldset class="field">
	<legend class="leg">Encuesta</legend>
			<p class='qencuesta'>1.- Por favor, indíquenos su grado de satisfacción general con <strong>Servicios 
			Industriales FAFACI</strong> en una escala de 1 a 10,  donde 10 es completamente satisfecho y 1 es completamente insatisfecho:</p>
			<select name="sltSatis">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option selected>10</option>
			</select>
			
			<p class='qencuesta'>2.- Por favor, valore del 1 al 10 (donde 1 es pobre y 10 es excelente) los siguientes atributos de <strong>Servicios Industriales FAFACI</strong>: </p>
			
			<center>
			<table id="tableAtributos" cellspacing='0'>
				<tr>
					<th>Atributos</th>
					<th>Valoración</th>
				</tr>
				
				<tr>
				<td>
					Profesionalismo:
				</td>
				
				<td>
					<center>
					<select name="valor1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
					</center>
				</td>
			</tr>
			
			<tr>
			<td>
					Organización:
				</td>
				
				<td>
				<center>
					<select name="valor2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
			<tr>
			<td>
					Calidad del producto:
				</td>
				
				<td>
				<center>
					<select name="valor3">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
			<tr>
			<td>
					Servicio post-venta:
				</td>
				
				<td>
				<center>
					<select name="valor4">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
				<tr>
			<td>
					Satisfacción del cliente:
				</td>
				
				<td>
				<center>
					<select name="valor5">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
				<tr>
			<td>
					Calidad del servicio:
				</td>
				
				<td>
				<center>
					<select name="valor6">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
				<tr>
			<td>
					Higiene y seguridad:
				</td>
				
				<td>
				<center>
					<select name="valor7">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
				<tr>
			<td>
					Relación calidad-precio:
				</td>
				
				<td>
				<center>
					<select name="valor8">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
				<tr>
			<td>
					Capacitación del personal:
				</td>
				
				<td>
				<center>
					<select name="valor9">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
				<tr>
			<td>
					Equipo y herramienta de trabajo:
				</td>
				
				<td>
				<center>
					<select name="valor10">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option selected>10</option>
					</select>
				</center>
			</td>
			
			</tr>
			
			</table>
			</center>

			<p class='qencuesta'>3.- ¿Recomendaría nuestro producto a otras personas?</p>
			<input type="radio" name="radioRecomendacion" value="Si" checked>Si <br>
			<input type="radio" name="radioRecomendacion" value="No">No <br>
			
			<p class='qencuesta'>4.- ¿Hay alguna cosa que le gustaría sugerirle a <strong>Servicios Industriales FAFACI</strong> sobre el servicio que proporciona?</p>
			<textarea name="txtComent" rows="5" cols="77"></textarea>
			<br>
			<input class="btn" type="submit" name="enviarForm" value="Enviar Respuestas">
			
			</fieldset>
		</form>
		
		</div>
		
		<div id="mainFooter">
		<p>WWW.FAFACI.COM.MX</p>
		<strong><p>COMPROMETIDOS CON LA MEJORA CONTINUA.</p></strong>
		</div>
		
	</body>
	
</html>