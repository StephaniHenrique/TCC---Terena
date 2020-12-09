<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simetria</title>
    <!-- icons css -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/escolha-cad.css">
    <!-- icon title-->
    <link rel="icon" type="imagem/png" href="./assets/img/logo.png" />
</head>
<body >
    <header class="s-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo" id="log">
                <img src="./assets/img/logo.png" alt="">
                Simetria
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item  border-item">
                        <a href="index.php" class="nav__link">inicio</a>
                    </li>
                    <li class="nav__item  border-item">
                        <a href="index.php" class="nav__link">aplicativo</a>
                    </li>
                    <li class="nav__item border-item">
                        <a href="index.php" class="nav__link">sobre</a>
                    </li>
                    <li class="nav__item ">
                        <a href="login.php" class=" btn btn-entrar">entrar</a>
                    </li>
                    <li class="nav__item ">
                        <a href="escolha-cad.php" class="btn btn-cadastrar">cadastrar</a>
                    </li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu-alt-left'></i>
            </div>
        </nav>
    </header>
    <section class="top">
        <p class="sombra">CADASTRAR</p>
        <p class="sombra">CADASTRAR</p>
        <p class="sombra">CADASTRAR</p>
    </section> 

    <main class="s-main">
    <h1>Qual seu objetivo aqui no Simetria?</h1>
        <div class="infos__log">
            
            <h2>Já tem uma conta no Simetria?</h2>
            <a href="login.php" class="info__link">faça login</a>
        </div>
        </br>
        <div class="escolha">
            <a href="#" class="aluno">
                <img src="./assets/img/yel.png" alt="">
            </a>
            <a href="cadInstituicaoo.php" class="instituto">
                <img src="./assets/img/pur.png" alt="">
            </a>
        </div>
    </main>

    <!-- javascript-->
    <script src="./assets/js/index.js"></script>
    </body>
</html>