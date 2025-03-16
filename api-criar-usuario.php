<?php

require "api.php";
// LOGIN-CADASTRO.PHP
// RESPONSÁVEL POR PEGAR O EMAIL E A SENHA DO FORMULÁRIO
//  SE VALOR EMAIL E SENHA NÃO TIVER VALORES CAI NO ERRO / EMAIL E SENHAS SÃO OBRIGATORIOS
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
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
$pjouclt = $_POST['pjouclt'] ?? null;


// SE NÃO TIVER VALOR CAI NO NULL E É CONSIDERADO FALSO E CAI NO ERRO
if (!$email || !$senha || !$pjouclt || !$nome || !$cpf || !$celular || !$sexo || !$datanascimento || !$cep || !$endereco || !$complemento || !$bairro || !$cidade || !$estado) {
    echo json_encode(['sucess' => false, 'message' => 'Preencha todos os campos']);
    exit;
};

/**
 * passowrd_hash - É uma função PHP que é usada para gerar um 'hash' seguro
 * 'hash' É uma versão CRIPTOGRAFADA e IRREVERSÍVEL da senha ORIGINAL
 * A função usa 'hashing fortes', como BCRYPT, para GARANTIR que as SENHAS sejam ARMAZENADAS DE MANEIRA SEGURA
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
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':celular', $celular);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->bindParam(':datanascimento', $datanascimento);
    $stmt->bindParam(':cep', $cep);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':complemento', $complemento);
    $stmt->bindParam(':bairro', $bairro);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':pjouclt', $pjouclt);

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

<!-- 

        FORMULARIO - FALE CONOSCO

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$telefone = $_POST['telefone'] ?? null;
$numPedido = $_POST['numPedido'] ?? null;
$mensagem = $_POST['mensagem'] ?? null;


-->