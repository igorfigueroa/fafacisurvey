<?php 
  if ($_POST){
    $dest = $_POST['dest'];
    require("./mailer/class.phpmailer.php");
    require("./mailer/class.smtp.php");

    $body = '
    
    <style>
      #contenedor {
        font-family: Arial, sans-serif;
      }

      .mensaje {
        color: #6B5E62;
      }

        .mensaje h1 {
          text-align: center;
        }
  
      .agradecimientos {
        text-align: center;
        color: #4E3D42;
      }

      .enlace {
         text-align: center;
         display: block;
         padding: 20px;
         background: silver;
      }

      .enlace a {
        color: #A24936;
        padding: 15px;
      }

      .slogan {
        text-transform: uppercase;
        font-weight: bold;
      }
    </style>

    <div id="contenedor">
      <div class="head-mail">
        <img src="" alt="logotipo fafaci sa de cv">
      </div>

      <div class="mensaje">
        <h1>ESTIMADO CLIENTE</h1>

        <p>En <strong>Servicios Industriales Fafaci S.A. de C.V.</strong> tenemos como misión el mejorar cada dia nuestros servicios por lo que, a continuación
        le hacemos envío de nuestra Encuesta de Satisfacción del Cliente solicitandole de la manera mas atenta 5 minutos de su valioso tiempo
        para el llenado de la misma; Sus respuestas nos ayudaran a mejorar considerablemente cada uno de nuestro servicios asi como la
        calidad de nuestros trabajos.</p>

      </div>
      
      <div class="enlace">
        <a href="http://www.fafaci.com.mx/calidad/encuesta">Encuesta de Satisfacción del Cliente</a>
      </div>

      <div class="agradecimientos">
        <p>Agradeceremos mucho sus amables comentarios, sin más de momento que tenga usted un excelente día</p>
        <h4>Atte. <br> Depto. Calidad</h4>
        <p>Servicios Industriales Fafaci S.A. de C.V.</p>
        <span class="slogan">-Comprometidos con la Mejora Continua-</span>
      </div>
    </div>
    ';

$mail = new PHPMailer();
$mail->IsSMTP();
//Ver Errores PHPMAILER al Enviar
//$mail->SMTPDebug  = 2;
$mail->SMTPAuth = true;
$mail->SMTPSecure = ""; //ssl//
$mail->Host = "smtp.1and1.com";
$mail->Port = 587;
$mail->Username = "igor.figueroa@transmana.com";
$mail->Password = "igor1322";

$mail->From = "igor.figueroa@transmana.com";
  $mail->FromName = "CALIDAD FAFACI";
  $mail->Subject = "SOLICITUD DE LLENADO DE ENCUESTA DE SATISFACCIÓN DEL CLIENTE";
  $mail->AltBody = "";
  $mail->MsgHTML($body);

$mail->AddAddress($dest, "Igor Figueroa");

$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';

if ($mail->Send()) {
  header("Location: ./envio-encuesta.php?status=ok&dest=".$dest);
}

}
?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Envío de Encuesta a Cliente</h4>
      </div>
      <div class="modal-body">
        <form action="" id="form-envio-encuesta" method="post">
          <label for="dest">Destinatario: </label>

          <input type="text" name="dest" id="dest" class="form-control" placeholder="Ingresa la dirección de email del destinatario" required>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar Encuesta</button>
      </form>
      </div>
    </div>
  </div>
</div>