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
      <div class="head-mail" style="text-align: center;">
        <img style="display: block; margin: 0 auto; text-align: center;" src="http://fafaci.com.mx/calidad/img/logotipo-fafaci.jpg" alt="logotipo fafaci sa de cv">
        <h1 style="text-align: center; color: #c0392b; border-bottom: 1px solid gray;">SERVICIOS INDUSTRIALES FAFACI, S.A. DE C.V.<h1>
      </div>

      <div class="mensaje">
        <h2 style="text-align: center;">ESTIMADO CLIENTE</h2>

        <p style="text-align: justify; font-size: 16px;">En <strong>Servicios Industriales Fafaci S.A. de C.V.</strong> tenemos como misión el mejorar cada dia nuestros servicios por lo que, a continuación
        le hacemos envío de nuestra Encuesta de Satisfacción del Cliente solicitandole de la manera mas atenta 5 minutos de su valioso tiempo
        para el llenado de la misma; Sus respuestas nos ayudaran a mejorar considerablemente cada uno de nuestro servicios asi como la
        calidad de nuestros trabajos.</p>

      </div>
      
      <div class="enlace" style="text-align: center; padding: 20px; background: #c0392b;">
      <a style="display: block; text-align: center; font-weight: bold; color: white;" href="http://www.fafaci.com.mx/calidad/encuesta">Encuesta de Satisfacción del Cliente</a>
      </div>

      <div class="agradecimientos" style="text-align: center; font-size: 16px;">
        <p>Agradeceremos mucho sus amables comentarios, sin más de momento que tenga usted un excelente día</p>
        <h4>Atte. <br> Depto. Calidad</h4>
        <p style="font-size: 18px;">Servicios Industriales Fafaci S.A. de C.V.</p>
        <span class="slogan" style="font-weight: bold; text-align: center; font-size: 18px;">-Comprometidos con la Mejora Continua-</span>
      </div>
    </div>
    ';

  $mail = new PHPMailer(true);
  //$mail->IsSMTP();
  //Ver Errores PHPMAILER al Enviar
  //$mail->SMTPDebug = 3;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = ""; //ssl//
  $mail->Host = "mail.shdesigns.com.mx";
  $mail->Port = 587;
  $mail->Username = "ifigueroa@shdesigns.com.mx";
  $mail->Password = "T8M4SLgh";

  $mail->From = "ifigueroa@shdesigns.com.mx";
    $mail->FromName = "CALIDAD FAFACI";
    $mail->Subject = "SOLICITUD DE LLENADO DE ENCUESTA DE SATISFACCIÓN DEL CLIENTE";
    $mail->AltBody = "";
    $mail->MsgHTML($body);
        $mail->AddAddress($dest, "Igor Figueroa");
        $mail->AddAddress("calidad@fafaci.com.mx", "Calidad Fafaci");
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';

    if (!$mail->Send()) {
      echo "Hubo un error!" .$mail->ErrorInfo;
    } else {
      header("Location: ./envio-encuesta.php?status=ok&dest=".$dest);
    }
}
?>
<meta charset="utf-8">
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