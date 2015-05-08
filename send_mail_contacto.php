<?php
    //print_r($_POST);
if(!empty($_POST)){
  function mail_utf8($to, $subject = '(No subject)', $message = '', $header = '') 
                {
     $header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
     return mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header_ . $header);
                    
                }
     
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $ocupacion = $_POST['ocupacion'];
    $interesado = $_POST['interesado'];
    $mensaje = $_POST['mensaje'];
    $info = $_POST['info'];
    $subject = 'Contacto Web Tedx Cancun';
    $to = "enrique@punkmkt.com";
    $headers="";

    $headers.= 'Content-Type: text/plain; charset=UTF-8' . '\r\n';
    
    $message ="";
    $message .="Nombre: ".$nombre."\n";
    $message .="Apellidos: ".$apellidos."\n";
    $message .="Correo: ".$email."\n";
    $message .="Ocupación: ".$ocupacion."\n";
    $message .="Intresado en: ".$interesado."\n";
    $message .="Mensaje: ".$mensaje."\n"; 
    $message .="Desea recibir información: ".$info."\n"; 
    if(mail_utf8( $to, $subject, $message, $headers )){
        echo "Mensaje enviado correctamente,<br> en breve nos pondremos en contacto contigo.";
    }
    else{
        echo "Hubo un error al tratar de enviar el correo.<br> Intente nuevamente más tarde.";   
    }
}

    
?>
