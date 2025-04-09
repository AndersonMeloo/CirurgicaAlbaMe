<!-- PHP - include() É para apenas arquivos PHP. -->

<!-- < ?php
session_start(); // Iniciar a sessão

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    // Não está logado, redirecionar para a página de login
    header('Location: login-cadastro.php'); // Altere para a página de login correta
    exit; // Interromper a execução do código após o redirecionamento
}

// Usuário está logado, pode continuar carregando a página
?> -->

<?php

// header.php
$tituloPagina = "Pagina Inicial";

// apresentacao-php
$tituloApresentacao = "Bem-estar";
$descricaoApresentacao1 = "Preservando a Saúde e Bem-estar";
$descricaoApresentacao2 = "Conheça um pouco mais dos nossos valores para produzir o melhor produto para você";
$imagemApresentacao = "./imagens/imagens-apresentacao/tirando-pressao.png";
$beneficiosApresentacao = ["+ SEGURANÇA", "+ DURABILIDADE", "+ AUTENCIDADE", "+ TECNOLOGIA", "+ PRATICIDADE", "+ QUALIDADE"];
// $linkApresentacao = "https://cirurgicaalbame.lojaintegrada.com.br";

// destaque.php
$tituloDestaque = "Em Destaque!";
$textoDestaque1 = "As marcas mais recomendadas pelos médicos!";
$textoDestaque2 = "Bom é contar com a mais alta qualidade e tecnologia, na hora de cuidar da sua saúde e bem-estar. Com a Cirúrgica Alba, você tem a tranquilidade de marcas 100% recomendada pela comunidade médica para te ajudar a ter uma vida mais saudável.";
$destaqueApresentacao = "Compre aqui";

// produtos-geral.php
$produtoTitulo = "Lançamentos";
$produto1 = "Aparelhos de Pressão";

$imagemProdutos1 = "./imagens/imagens-produtos-geral/Ap-Pressao.jpeg";
$imagemProdutos2 = "./imagens/imagens-produtos-geral/Tipoia.jpg";
$imagemProdutos3 = "./imagens/imagens-produtos-geral/Ap.Glicose.jpeg";
$imagemProdutos4 = "./imagens/imagens-produtos-geral/Joelheira.jpg";
$imagemProdutos5 = "./imagens/imagens-produtos-geral/Meia-Compressiva.jpg";
$imagemProdutos6 = "./imagens/imagens-produtos-geral/Cintas.jpg";
$imagemProdutos7 = "./imagens/imagens-produtos-geral/Muletas.jpg";
$imagemProdutos8 = "./imagens/imagens-produtos-geral/Andadores.jpg";

?>


<!-- Configurações Gerais  -->
<?php include_once('configuracoes-gerais.php'); ?>

<?php include_once('header.php'); ?>
<?php include('carrossel.php'); ?>
<?php include('apresentacao.php'); ?>
<?php include('parallax.php'); ?>
<?php include('destaques.php'); ?>
<?php include('parallax2.php'); ?>
<?php include('produtos-geral.php'); ?>
<?php include_once('rodape.php'); ?>
<?php include 'login-cadastro.php'; ?>

<!-- 
    include() 
    Inclui o arquivo toda vez que for chamado no código
    Se for chamado duas vezes, ele será incluído duas vezes
    Se o arquivo não for encontrado, gera um aviso (Warning), mas o script continua rodando

    require()
    Funciona igual ao include, mas se o arquivo não for encontrado, gera um erro falta (Fatal Error) e o script para

    include_once() - 
    Inclui o arquivo apenas uma vez, mesmo que seja chamado várias vezes no código
    Evita duplicação do conteúdo do arquivo

    require_once() - 
    Mesma lógica de include_once, mas a diferença de que se o arquivo não for encontrado, gera um erro fatal (Fatal Error) e o script para
-->

<!-- Restante do conteúdo da página -->