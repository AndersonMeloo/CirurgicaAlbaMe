<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Certifique-se de que o PHPMailer está instalado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $sobrenome = $_POST['sobrenome'] ?? '';
    $email = $_POST['email'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    // Inicializando o PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->setFrom($email, "$nome $sobrenome");
        $mail->addAddress('caique99lucena@gmail.com'); // Altere para o destinatário correto
        $mail->Subject = "Nova mensagem de $nome $sobrenome";
        $mail->Body = $mensagem;

        $mail->send();
        echo "Mensagem enviada com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
    }
}
?>