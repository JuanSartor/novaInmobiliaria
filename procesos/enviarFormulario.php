<?php


// Incluye el autoload de Composer o carga manualmente las clases
include '../bat/phpmailer/PHPMailerAutoload.php';


$mail = new PHPMailer(true);

try {
    // Configura los servidores SMTP
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.gmail.com'; // Host de tu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'juansartor92@gmail.com'; // Tu usuario SMTP
    $mail->Password = 'axxc vbcf qamo cuve'; // Tu contraseña SMTP
    $mail->SMTPSecure = 'tls'; // tls o ssl
    $mail->Port = 587; // El puerto SMTP para enviar

    // Configura el remitente
    $mail->setFrom('juansartor92@gmail.com', 'Consulta de ' . $_POST["nombre_apellido"]);

    // Configura el destinatario
    $mail->addAddress('juani_sartor@hotmail.com.ar', 'Nombre asdasdsa');

    // Configura el asunto y el cuerpo del correo
    $mail->Subject = 'Consulta via web';

    $textoBody = '';
    if (!empty($_POST["nombre_apellido"])) {
        $textoBody = $textoBody . $_POST["nombre_apellido"];
    }
    if (!empty($_POST["celular"])) {
        $textoBody = $textoBody . "\n Celular: " . $_POST["celular"];
    }
    if (!empty($_POST["email"])) {
        $textoBody = $textoBody . "\n Email: " . $_POST["email"];
    }
    if (!empty($_POST["operacion"])) {
        $textoBody = $textoBody . "\n Operacion: " . $_POST["operacion"];
    }
    if (!empty($_POST["propiedad"])) {
        $textoBody = $textoBody   . "\n Propiedad: " . $_POST["propiedad"];
    }

    if (!empty($_POST["observaciones"])) {
        $textoBody = $textoBody    . "\n \n Observacion: " . $_POST["observaciones"];
    }


    $mail->Body = $textoBody;


    // Envía el correo
    $mail->send();
    return true;
} catch (Exception $e) {
    echo "El correo no pudo ser enviado. Error: {$mail->ErrorInfo}";
}
