<section class="container__apresentacao">

  <aside class="apresentacao-lt">
    <h1 class="apresentacao-titulo"><?= $tituloApresentacao ?? "Bem-estar" ?></h1>
    <p class="apresentacao-texto apres-txt1"><?= $descricaoApresentacao1 ?? "Preservando a Saúde e Bem-estar" ?></p>
    <p class="apresentacao-texto apres-txt2"><?= $descricaoApresentacao2 ?? "Conheça um pouco mais dos nossos valores para produzir o melhor produto para você" ?></p>
    
    <!-- echo - serve para imprimir qualquer valor que eu queira imprimir na tela, pode ser usado com strings, number, vars, arrays, objetos, HTML e código PHP -->
    <!-- Exemplo do echo < ?php  echo 5 + 3; // Vai imprimir "8" ?> -->
    <img class="apresentacao-img" src="<?php echo $imagemApresentacao ?? ''; ?>" alt="Imagem de Apresentação do Site">
  </aside>

  <div class="apresentacao-ltd">
    <?php foreach ($beneficios ?? ["+ SEGURANÇA", "+ DURABILIDADE", "+ AUTENCIDADE", "+ TECNOLOGIA", "+ PRATICIDADE", "+ QUALIDADE"] as $beneficioApresentacao): ?>
      <p class="apres-lt-text"><?= $beneficioApresentacao ?></p>
    <?php endforeach; ?>

    <button class="apres-btn1">
      <a class="apres-btn2" href="<?= $linkApresentacao ?? 'https://cirurgicaalbame.lojaintegrada.com.br' ?>">Compre aqui</a>
    </button>
  </div>

</section>