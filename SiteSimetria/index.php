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
    <!-- icon title-->
    <link rel="icon" type="imagem/png" href="./assets/img/logo.png" />
</head>
<body >
    <header class="s-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">
                <img src="./assets/img/logo.png" alt="">
                Simetria
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item  border-item">
                        <a href="#inicio" class="nav__link">inicio</a>
                    </li>
                    <li class="nav__item  border-item">
                        <a href="#app" class="nav__link">aplicativo</a>
                    </li>
                    <li class="nav__item border-item">
                        <a href="#sobre" class="nav__link">sobre</a>
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
    <main class="s-main">
        <section class="inicio" id="inicio">
            <div class="home__container bd-container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">
                        faça a mudança
                    </h1>
                    <h2 class="home__subtitle">
                        comece hoje ajudando um estudante a escrever um novo futuro
                    </h2>
                    <a href="escolha-cad.php" class="home__btn">seja um herói</a>
                </div>
                <img src="./assets/img/frame.png" alt="" class="home__img">
            </div>
        </section>
        <section class="app">
            <div class="app__container bd-grid" id="app">
                <div class="app__data">
                    <p class="app__description">
                        TENHA SIMETRIA 
                        NA PALMA DA MÃO
                        E CRIE NOVOS FUTUROS 
                        COM POUCOS CLIQUES
                    </p>

                    <div class="app__stores">
                        <div class="app__btn">
                            <i class='bx bxl-apple' ></i>
                               <p>
                               Baixar na 
                                </br>AppleStore
                               </p>
                        </div> 
                        <div class="app__btn">
                            <i class='bx bxl-play-store'></i>
                            <p>
                               Baixar na 
                            </br>PlayStore
                               </p>
                        </div> 

                    </div>
                    
                </div>
                <div class="app__img">
                        <img src="./assets/img/moc.png" alt="">
                    </div>
            </div>
        </section>
        <section class="sobre section bd-container" id="sobre">
            <div class="about__container bd-grid">
                <div class="about__data">
                    <h2 class="about__title">
                        são mais que doações
                        </br> são a construção de  um fututro melhor
                    </h2>
                    <span class="section-subtitle">
                        são mais que numeros, é a historia de milhões de crianças por todo o mundo
                    </span>
                </div>
                <div class="about__dados">
                    <img src="./assets/img/exames.png" alt="" class="about__img">
                    <div class="about__infos">
                        <div class="one">
                            <div class="infos">
                                <h3 class="title">
                                1 a 4 brasileiros abandona os estudos atualmente
                                </h3>
                                <span class="subtitle">
                                    insper
                                </span>
                            </div>
                        </div>
                        <div class="two">
                            <div class="infos">
                                <h3 class="title">
                                29% dos alunos tem baixo rendimento 
                                devido á ausencia de motivação
                                </h3>
                                <span class="subtitle">
                                    Programa Internacional de Avaliação de Alunos
                                </span>
                            </div>
                        </div>
                        <div class="three">
                            <div class="infos">
                                <h3 class="title">
                                79% dos entrevistados se sentiram motivados após receber uma doação
                                </h3>
                                <span class="subtitle">
                                    Terena, 2020
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="relatos section ">
            <h2 class="relatos-title">
                não acredite apenas em dados</br>
                conheça histórias reais de quem já foi ajudado
            </h2>
            <div class="sub-grid">
                <div class="sub__relato">
                    <div class="relato one">
                        “Criei meu caso no simetria e não 
                        acreditava que alguem poderia me 
                        ajudar, 2 dias depois alguem me 
                        enviou um celular e eu pude continuar 
                        estudando a distância, meu sonho de 
                        ter uma vida melhor continua , 
                        graças ao sime e a pessoa que e 
                        ajudou, obrigada!”
                    </div>
                    <div class="sub__dados">
                        <img src="./assets/img/rosa.png" alt="">
                        <p class="nome">Eloisa, 13 anos</p>
                        <p class="subtitle">
                        Moradora de cidade ribeirinha no Amazonas
                        </p>
                    </div>
                </div>
                <div class="sub__relato">
                    <div class="relato two">
                        “Sempre tive muida vontade de ajudar o proximo mas achava impossivel pra mim. Soube do Simetria e comecei a ver quantos estudantes precisavam da minha ajuda. Hoje ajudamos mais de 50 alunos, encontrei meu proposito com ajuda do SIme”
                    </div>
                    <div class="sub__dados ">
                        <img src="./assets/img/amarelo.png" alt="">
                        <p class="nome">José, 45 anos</p>
                        <p class="subtitle">
                        Criou a ONG Amigos da comunidade
                        </p>
                    </div>
                </div>
                <div class="sub__relato">
                    <div class="relato three">
                        “Durante toda minha vida, vi minha comunidade precisar de medicos e quem cuidasse deles, inclusive minha familia, hoje com ajuda do Simetria e do Ricardo, faço meu cursinho para o vestibular e terei a oportunidade  de mudar minha comunidade, sime me trouxe esperança”
                    </div>
                    <div class="sub__dados">
                        <img src="./assets/img/azul.png" alt="">
                        <p class="nome">Julia, 16 anos</p>
                        <p class="subtitle">
                        Tem o sonho de ser médica
                        </p>
                    </div>
                </div>
            </div>  
        </section>
    </main>
    <footer class="footer">
        <div class="logo">
            <img src="./assets/img/logo.png" alt="">
            <p>Simetria</p>
        </div>
        <p>feito com <i class='bx bxs-heart' ></i> por Sime</p>
    </footer>

    <!-- javascript-->
    <script src="./assets/js/index.js"></script>

    <!-- scrool reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>

</body>
</html>