<?php

#Lib PHPMailer é uma lib que facilita invio de e-mails a partir de scripts PHP

#Pode enviar e-mails de forma mais simples, incluindo anexos de autenticação SMTP
include_once("PHPMailer/PHPMailer.php");

#STMT Simple Mail Transfer Protocol
#SMTP é o protocolo utilizado para enviar e-mails de um servidor para outro
include_once("PHPMailer/SMTP.php");

#Ele trata exceções (erros) que podem ocorrer durante o uso da PHPMailer
#Caso algo dê errado, você pode capturar e tratar o erro de forma mais amigável e controlada
include_once("PHPMailer/Exception.php");

#use Serve para importar a classe PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$mensagem =  'Conteúdo';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];


try {
    #Server Settings
    $mail->isSMTP();  #Send Using SMTP
    $mail->CharSet = 'UTF-8'; #Set the character set of the message
    $mail->Host = 'smtp.gmail.com';
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true; #Set the SMTP server to send through
    $mail->Username = 'andersonrodriguesmelo@hotmail.com'; #Enable SMTP authentication
    $mail->Password = 'gerar a senha com o seu gmail'; #SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; #Enable implict TLS encryption
    $mail->Port = 587; #TCP port to connect to; use 587 if you


    #Recipients
    $mail->setFrom('andersonrodriguesmelo@hotmail.com', 'Anderson Melo');
    $mail->addAddress('andersonrodriguesmelo@hotmail.com'); #Name is optional 
    $mail->addCC('caique99lucena@gmail.com');

    #Content
    $mail->isHTML(true); #Set email format to HTML
    $mail->Subject = "Mensagem de $nome $sobrenome";
    $mail->Body = $mensagem . "<br><br> Email para contato: $email";

    $mail->send();
    echo '<br>Mensagem enviada com sucesso<br>';
} catch (Exception $e) {
    echo 'Não foi possivel enviar a mensagem. Erro do Mailer' . $mail->ErrorInfo;
}
