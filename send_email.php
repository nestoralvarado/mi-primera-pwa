<?php
header('Content-Type: application/json');

// Verificar si es una petición POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit('Solo se permiten peticiones POST');
}

// Recoger datos del formulario
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// Verificar honeypot
if (!empty($_POST['honeypot'])) {
    exit('Spam detectado');
}

// Configurar el correo
$to = "technographicca@gmail.com"; // AQUÍ PON TU CORREO
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$email_content = "Nombre: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Mensaje:\n$message";

// Enviar el correo
$success = mail($to, $subject, $email_content, $headers);

// Responder al cliente
if ($success) {
    echo json_encode(['status' => 'success']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error']);
}
?> 