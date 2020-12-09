<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RELATÓRIOS | Olá admin!</title>
        <!-- icons -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!-- css -->
        <link rel="icon" type="imagem/png" href="./img/logo.png" />
        <link rel="stylesheet" href="./css/style.css">
        <!--link rel="stylesheet" href="./css/search.css"-->
        
        <link rel="stylesheet" href="./css/relatorios.css">

    </head>
    <body id= "body-pd">
        <!-- header -->
        <header class="header" id="header">
        <!-- botão de toggle -->
        <div class="header__toggle">
            <i class='bx bx-menu-alt-left' id="header-toggle"></i>
        </div>
        <div class="header__infos">
            <!-- foto de perfil-->
            <div class="header__profile">
                <i class='bx bxs-user'></i>
                <p> admin </p>
            </div>

        </div>
    </header>
        <!-- sidebar-->
        <div class="navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <!-- logo simetria -->
                    <a href="#" class="nav__logo ">
                        <img src="./img/logo.png" alt="" class="nav__logo-icon"> 
                        <span class="nav__logo-name">Simetria</span>
                    </a>
                    <!-- opções de navegação-->
                    <div class="nav__list">
                        <a href="index.php" class="nav__link">
                            <i class='bx bxs-dashboard nav__icon'></i>
                            <span class="nav__name">Dashboard</span>
                        </a>
                        <a href="relatorios.php" class="nav__link active">
                            <i class='bx bx-note nav__icon' ></i>
                            <span class="nav__name">Relatórios</span>
                        </a>
                        <a href="userEstudante.php" class="nav__link">
                            <i class='bx bxs-user nav__icon' ></i>
                            <span class="nav__name">Estudantes</span>
                        </a>
                        <a href="userDoador.php" class="nav__link">
                            <i class='bx bxs-donate-heart nav__icon' ></i>
                            <span class="nav__name">Doadores</span>
                        </a>
                
                        <a href="userEscola.php" class="nav__link">
                            <i class='bx bxs-school nav__icon'></i>
                            <span class="nav__name">Instituições</span>
                        </a>
                    </div>
                    
                </div>
                <a href="#" class="nav__link">
                        <i class='bx bx-log-out nav__icon'></i>
                        <span class="nav__name">sair</span>
                    </a>
            </nav>
        </div>
        <!-- conteudo  -->
        <main class="l-main">
            <div class="mainText">
                <div class="mainTitle">
                    <i class='bx bxs-donate-heart' ></i>
                    <h4>
                        Relatórios
                    </h4>
                </div>
                <p>
                Gerar relatórios 
                </p>
            </div>

            <div class="search">
              <form method="POST" id="form-pesquisa" action="">
              <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do usuário">
                    <!-- <button type="submit">
                        <i class='bx bx-search' ></i>
                    </button> -->
                </form></div>

                <div class="tb-result">
                <ul class="tb-head">
                    <li>ID</li>
                    <li>Nome</li>
                    <li>Data de Nascimento</li>
                    <li>CPF</li>
                    <li>CEP</li>
                    <li>Sexo</li>
                    <li>Instituição</li>
                    <li>Escolaridade</li>
                    <li>Acesso</li>
                    <li>Nivel</li>
                    <!-- colocar um icone bonitinho aqui -->
                    <li> <a href="relatorios/gerar-registros.php">PDF</a></li>
                </ul>
                </div>
                    
                <div class="resultado"></div>     

               
        </main>
        
        <!-- pesquisa -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="personalizado.js"></script>
        <!-- scroll reveal -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- javascrip -->
        <script src="./js/script.js"></script>
    </body>
</html>

</html>
