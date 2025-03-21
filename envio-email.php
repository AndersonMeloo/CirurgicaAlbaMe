<?php

#Lib PHPMailer é uma lib que facilita invio de e-mails a partir de scripts PHP

#Pode enviar e-mails de forma mais simples, incluindo anexos de autenticação SMTP
include_once("PHPMailer/PHPMailer.php");

#STMT Simple Mail Transfer Protocol
#SMTP é o protocolo utilizado para enviar e-mails de um servidor para outro
// include_once("PHPMailer/SMTP.php");

#Ele trata exceções (erros) que podem ocorrer durante o uso da PHPMailer
#Caso algo dê errado, você pode capturar e tratar o erro de forma mais amigável e controlada
include_once("PHPMailer/Exception.php");

#use Serve para importar a classe PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

var_dump(class_exists('PHPMailer\\PHPMailer\\SMTP'));

$mail = new PHPMailer(true);

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


try {
    #Server Settings
    $mail->isSMTP();  #Send Using SMTP
    $mail->CharSet = 'UTF-8'; #Set the character set of the message
    $mail->Host = 'smtp.gmail.com'; #Server PHPMailer Gmail
    // $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true; #Set the SMTP server to send through
    $mail->Username = 'andersonrodriguesmelo@hotmail.com'; #Enable SMTP authentication
    $mail->Password = 'whxemulaopokxpzh'; #SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; #Enable implict TLS encryption
    $mail->Port = 587; #TCP port to connect to; use 587 if you


    #Recipients Destinatário
    $mail->setFrom('andersonrodriguesmelo@hotmail.com', 'Mail Project');
    $mail->addAddress('andersonrodriguesmelo@hotmail.com'); #Name is optional - Para quem vai ser enviado o E-mail
    $mail->addCC('caique99lucena@gmail.com');

    #Content Assunto e corpo do e-mail
    $mail->isHTML(true); #Set email format to HTML
    $mail->Subject = "Mensagem de $nome $sobrenome";
    $mail->Body = $mensagem . "<br><br> Email para contato: $email";

    #Evniar o e-mail
    $mail->send();
    echo '<br>Mensagem enviada com sucesso<br>';
} catch (Exception $e) {
    echo 'Não foi possivel enviar a mensagem. Erro do Mailer' . $mail->ErrorInfo;
}
