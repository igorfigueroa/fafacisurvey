<form name="encuestaCalidad" class="form-encuesta" action="" method="post">
						
					<fieldset>
						<legend>Datos del Cliente</legend>
						<span class="error">
							<?php if(isset($error)) {
					echo $error;
				} ?>
						</span>
							<div class="each">
								<table class="table table-responsive table-condensed table-bordered">
									
										<tr>
											<td>
												<label for="txtPedido">Proyecto o No. de Pedido:</label>
											</td>

											<td>
												<input type="text" name="txtPedido" size="45" id="txtPedido" class="form-control" placeholder="¿Que proyecto va a calificar?" value="" required>
											</td>

											<td>
												<label for="txtCorreo">Correo Electrónico:</label>
											</td>

											<td>
												<input type="email" name="txtCorreo" size="45" id="txtCorreo" class="form-control" placeholder="Introduzca un correo electrónico de contacto." required>
											</td>
										</tr>

										<tr>
											<td>
												<label for="txtNombre">Introduzca su Nombre:</label>
											</td>

											<td>
												<input type="text" name="txtNombre" size="45" id="txtNombre" class="form-control" placeholder="¿Cual es es su nombre?" required>
											</td>

											<td>
												<label for="txtEmpresa">Empresa:</label>
											</td>

											<td>
												<input type="text" name="txtEmpresa" size="45" id="txtEmpresa" class="form-control" placeholder="¿Cual es su empresa?" required>
											</td>
										</tr>
								</table>
							</div>
					</fieldset>

					<fieldset>
						<legend>Encuesta</legend>

						<div class="each">
								<p class="question"><span class="no">1</span> Por favor, indíquenos su grado de satisfacción general con <strong>Servicios 
								Industriales FAFACI</strong> en una escala de 1 a 10,  donde 10 es completamente satisfecho y 1 es completamente insatisfecho:</p>

								<select name="q[1]" class="form-control">
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

							
							<p><span class="no">2</span> Por favor, valore del 1 al 10 (donde 1 es pobre y 10 es excelente) los siguientes atributos de 
							<strong>Servicios Industriales FAFACI</strong>: </p>
							
						<table id="tableAtributos" class="table table-condensed table-bordered">
							<tr>
									<th>Atributos</th>
									<th>Valoración</th>
							</tr>
								
							<tr>
								<td>
									1) Profesionalismo:
								</td>
								
								<td>
									<select name="q[2]" class="form-control">
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
								</td>
							</tr>
							
							<tr>
								<td>
									2) Organización:
								</td>
								
								<td>
									<select name="q[3]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									3) Calidad del producto:
								</td>
								
								<td>
									<select name="q[4]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									4) Servicio post-venta:
								</td>
								
								<td>
									<select name="q[5]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									5) Satisfacción del cliente:
								</td>
								
								<td>
									<select name="q[6]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									6) Calidad del servicio:
								</td>
								
								<td>
									<select name="q[7]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									7) Higiene y seguridad:
								</td>
								
								<td>
									<select name="q[8]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									8) Relación calidad-precio:
								</td>
								
								<td>
									<select name="q[9]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									9) Capacitación del personal:
								</td>
								
								<td>
									<select name="q[10]" class="form-control">
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
								</td>
							
							</tr>
							
							<tr>
								<td>
									10) Equipo y herramienta de trabajo:
								</td>
								
								<td>
									<select name="q[11]" class="form-control">
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
								</td>
							
							</tr>
						</table>

							<p><span class="no">3</span> ¿Recomendaría nuestros servicios a otras personas?</p>
								<div class="r-group">
									<input type="radio" name="q[12]" class="custom-radio" id="r1" value="Si" checked><label for="r1">¡POR SUPUESTO!</label>
									<input type="radio" name="q[12]" class="custom-radio" id="r2" value="No"><label for="r2">LA VERDAD NO...</label>
								</div>

							<p><span class="no">4</span> ¿Hay alguna cosa que le gustaría sugerirle a <strong>Servicios Industriales Fafaci</strong> 
								sobre el servicio que proporciona?</p>
								<textarea name="q[13]" class="form-control" placeholder="Escriba cualquier comentario que tenga sobre nuestra empresa"></textarea>

								<button class="btn btn-custom" type="submit" name="enviarForm"><i class="fa fa-envelope"></i> Enviar Respuestas</button>

						</div>
						</fieldset>

														
</form>