<?php

// TUDO O QUE ACONTECER VAI SER DO TIPO JSON COMO RETORNO DE ALGO
header('Content-Type: application/json');

// CONFIGURAÇÃO BANCO DE DADOS

// HOST É O LOCALHOST - LOCALHOST É A MINHA MAQUINA
$host = 'localhost';

// DATABASE DA ONDE ESTA PUXANDO A API QUE SE CHAMA USUARIOS ATUALMENTE
$db = 'usuarios';

// USUARIO É O ROOT QUE É DO phpMyAdmin
$user = 'root';

// SENHA NÃO TEM, É UMA SENHA VAZIA
$pass = '';

try {
    // O DRIVER QUE É MYSQL QUE ESTA PEGANDO O $host, $user e $pass
    $pdo = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);

    // DEFININDO ALGUMAS OPÇÕES CONSEGUIR LANÇAR ALGUMA EXCEÇÃO CASO OCORRA ALGUM ERRO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {

    // PEGA O ERRO CASO DE ALGUMA COISA DE ERRADO NA HORA DE CRIAR A CONEXÃO
    echo json_encode(['sucess' => false, "message" => 'Erro de conexão: ' . $e->getMessage()]);
    // exit; ENCERRA O SCRIPT
    exit;
}

?>


