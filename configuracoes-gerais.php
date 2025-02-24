<?php

$telefoneWhatsapp = "(11) 91962-3472";
$emailPrincipal = "cirurgicaalbame@gmail.com";
$endereco = "São Paulo - SP";
$iconePerfil = "./imagens/imagens-icon/icon-perfil.svg";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Qualquer página onde eu quiser definir um título diferente, basta fazer isso antes de incluir o header.php -->

    <!-- header.php - Verifica se $tituloPagina esta definida -->
    <!-- echo isset() - Funciona como um if/else 
           echo isset($tituloPagina) - Verifica se a varíavel $tituloPagina existe e não é nula

           Se true - Retorna $tituloPagina
           Se false - Retorna "Cirúrgica Alba ME' como valor Padrão
     -->
    <title><?php echo isset($tituloPagina) ? $tituloPagina : "Cirúrgica Alba ME" ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./imagens/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

</body>

</html>