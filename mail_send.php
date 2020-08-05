<?php

function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function enviaEmail($de, $assunto, $para, $email_servidor) {
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, $headers);
}

$email_servidor = "contato@mygeekbox.com.br";
$para = "contato@mygeekbox.com.br";
$de = pegaValor("email");
$assunto = "Estou interessado na My Geek Box";

if (validaEmail($de)) {
    enviaEmail($de, $assunto, $para, $email_servidor);
    $pagina = "index.php";

} else {
    $pagina = "mail_error.php";
}

header("location:$pagina");

?>