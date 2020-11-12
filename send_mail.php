<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "info@jacarandayoga.com.ar";
    $txt = "Email enviado desde el sitio web Jacarandayoga.com.ar \n\nNombre: ".$name.".\n\n"."Mail: ".$mailFrom.".\n\n"."Mensaje: ".$message;
    
    mail($mailTo, $subject, $txt);
    header("Location: message_sended.html");
}