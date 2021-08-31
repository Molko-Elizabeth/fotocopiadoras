<?php
// prueba.php
//levanto datos del form
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];
 //mail a mi mail
 mail(
     "info@ricopier.net",
     "mail desde web.com",
     "$nombre te envio $comentario contactalo a $email",
    "from:super sitio <info@superweb.com>"
 );
 //mail usuario
 mail(
    $email,"web.com recibimos tu consulta",
    "recibimos tu consulta,te queremos sasass",
    "from:super sitio <info@superweb.com>"
 );
 echo "mensaje enviado";





// destinatario / asunto / cuerpo --- mandar x post
/*mail(
    "info@ricopier.net",
    "Probando form",
    "Este es el mensaje",
    "from:super sitio <info@superweb.com>"
);*/

?>