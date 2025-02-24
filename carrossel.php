<?php

// Array de imagens do PHP

$imagens = [
    [ "src" => "imagens/slide1.jpg", "titulo" => "Primeiro Slide", "descricao" => "Descrição do primeiro slide." ],
    [ "src" => "imagens/slide2.jpg", "titulo" => "Segundo Slide", "descricao" => "Descrição do segundo slide." ],
    [ "src" => "imagens/slide3.png", "titulo" => "Terceiro Slide", "descricao" => "Descrição do terceiro slide." ]
];

?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">


        <!-- 1 foreach ($imagens as $index => $imagem)
        - Percorre um array de imagens chamado $imagens
        - $index - índice numérico de cada imagem (0, 1, 2 e etc)
        - $imagem - Nome ou caminho de imagem no array

    -->

        <!-- Esse trecho de código gera automaticamente os botões do carrosel com base nas imagens disponíveis -->
        <?php foreach ($imagens as $index => $imagem) : ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>"
                class="<?= $index === 0 ? 'active' : '' ?>"
                aria-label="Slide <?= $index + 1 ?>">
            </button>
        <?php endforeach; ?>
    </div>



    <!-- foreach para criar os slides -->
    <!-- Se precisar criar mais um slide basta eu inserir no array $imagens -->
    <div class="carousel-inner">
        <?php foreach ($imagens as $index => $imagem) : ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="<?= $imagem['src'] ?>" class="d-block w-100" alt="<?= $imagem['titulo'] ?>">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $imagem['titulo'] ?></h5>
                    <p><?= $imagem['descricao'] ?></p>
                </div>
            </div>


            <!-- endfoerch - Encerra o foreach -->
        <?php endforeach; ?>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>