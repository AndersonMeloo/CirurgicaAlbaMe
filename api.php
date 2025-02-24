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

<?php
// LOGIN-CADASTRO.PHP
// RESPONSÁVEL POR PEGAR O EMAIL E A SENHA DO FORMULÁRIO
//  SE VALOR EMAIL E SENHA NÃO TIVER VALORES CAI NO ERRO / EMAIL E SENHAS SÃO OBRIGATORIOS
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;


// SE NÃO TIVER VALOR CAI NO NULL E É CONSIDERADO FALSO E CAI NO ERRO
if (!$email || !$senha) {
    echo json_encode(['sucess' => false, 'message' => 'Email e senha são obrigatórios']);
    exit;
};

/**
 * passowrd_hash - É uma função PHP que é usada para gerar um 'hash' seguro
 * 'hash' É uma versão CRIPTOGRAFADA e IRREVERSÍVEL da senha ORIGINAL
 * A funlão usa 'hashing fortes', como BCRYPT, para GARANTIR que as SENHAS sejam ARMAZENADAS DE MANEIRA SEGURA
 */
$senhaHash = password_hash($senha, PASSWORD_BCRYPT);

try {
    // ABRINDO CONEXÃO
    $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";
    $stmt = $pdo->prepare($sql);

    /**
     * bindParam nos PARÂMETROS 'email' e 'senha'
     * Recebendo as variaveis $email e $senha
     * Que estou enviando na API
     */
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);

    if ($stmt->execute()) {
        // Se der certo, executa esta mensagem de SUCESSO
        echo json_encode(['sucess' => true, 'message' => 'Usuário cadastrado com sucesso!']);
    } else {
        //  Se der errado, retorna o ERRO
        echo json_encode(['sucess' => false, 'message' => 'Erro ao cadastrar usuário']);
    }
} catch (Exception $e) {
    // SE OCORRER ALGUM ERRO DURANTO AS OUTRAS REQUISIÇÕES É RETORNADO ESTÁ
    // CAPTURA ERROS GENÉRICOS
    /**
     * ERROS COMO:
     * ERROS DE CONEXÃO
     * ERROS AO ABRIR OU CRIAR ARQUIVO
     * ERROS DE VALIDAÇÃO DE DADOS
     * ERRO DE API
     * ERRO DE TIPOS DE DADOS INESPERADOS
     * ERRO DE CONFIGURAÇÕES OU AMBIENTE
     * FALHA NO PROCESSAMENTO DE ARQUIVO OU DADOS
     * ETC
     */
    echo json_encode(['sucess' => false, "message" => 'Erro ao cadastrar o usuário:' . $e->getMessage()]);
}

?>


