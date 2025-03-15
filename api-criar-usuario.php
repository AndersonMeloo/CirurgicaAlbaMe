<?php

require "api.php";
// LOGIN-CADASTRO.PHP
// RESPONSÁVEL POR PEGAR O EMAIL E A SENHA DO FORMULÁRIO
//  SE VALOR EMAIL E SENHA NÃO TIVER VALORES CAI NO ERRO / EMAIL E SENHAS SÃO OBRIGATORIOS
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

$pjoucl = $_POST['pjouclt'] ?? null;
$nome = $_POST['nome'] ?? null;
$cpf = $_POST['cpf'] ?? null;
$celular = $_POST['celular'] ?? null;
$sexo = $_POST['sexo'] ?? null;
$datanascimento = $_POST['datanascimento'] ?? null;
$cep = $_POST['cep'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$complemento = $_POST['complemento'] ?? null;
$bairro = $_POST['bairro'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$estado = $_POST['estado'] ?? null;


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
