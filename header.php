<body>

    <div class="topo">
        <div class="gap-3 p-3 d-flex justify-content-around navbar navbar-expand-lg topo-header">
            <span><?= $endereco ?? $endereco ?></span>
            <span class="top-text"><?= $telefoneWhatsapp ?? $telefoleWhatsapp ?></span>
            <span><?= $emailPrincipal ?? $emailPrincipal ?></span>
        </div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary topo-header">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="logo-site" src="./imagens/logo.jpg" alt="">
                    Cirúrgica Alba ME
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Novidades</a>
                        </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Meias de Compressão</a></li>
                                <li><a class="dropdown-item" href="#">Muletas</a></li>
                                <li><a class="dropdown-item" href="#">Aparelhos de Pressão</a></li>
                                <li><a class="dropdown-item" href="#">Ortopédicos</a></li>
                                <li><a class="dropdown-item" href="#">Andadores</a></li>
                                <li><a class="dropdown-item" href="#">Joelheiras</a></li>
                                <li><a class="dropdown-item" href="#">Aparelhos de Glicose</a></li>
                            </ul>

                        </li>
                        <a class="nav-link" href="#">Quem Somos</a>
                    </ul>

                    <span class="navbar-text login-cadastro-espacamento">
                        <img src="<?= $iconePerfil ?? $iconePerfil ?>" alt="">
                        <a href="login-cadastro.php">Login</a>
                    </span>
                    <span class="navbar-text ">
                        <a href="login-cadastro.php">Cadastre-se</a>
                    </span>
                </div>
            </div>
        </nav>
    </div>
</body>