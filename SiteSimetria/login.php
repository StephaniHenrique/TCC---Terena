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
    <link rel="stylesheet" href="./assets/css/logiin.css">
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
        <p class="sombra">ENTRAR</p>
        <p class="sombra">ENTRAR</p>
        <p class="sombra">ENTRAR</p>
        <p class="sombra">ENTRAR</p>
    </section> 

    <main class="s-main">
        <form action="banco/fazer-login.php" method="POST">
            <div class="infos__log">
                <h2>Primeira vez aqui no Simetria? 
                </h2>
                <a href="escolha-cad.php" class="info__link">
                    Cadastre-se
                </a>
            </div>
            <div class="options">
                <div class="check">
                    <input class="check" type="radio" name='perfil' value='1' > Aluno ou Doador
                </div>
                <div class="check">
                    <input class="chek" type="radio" name='perfil' value='2' > Instituição
                </div>
            </div>
            <div class="form-group">
                <i class='bx bxs-user-circle' ></i>
                <input type="text" name="email" id="" placeholder="email" class="text">
            </div>
            <div class="form-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="senha" id="senha" placeholder="senha" class="text-two">
                <input type="checkbox" name="" id="check" onclick="mostrarSenha()">
            </div>
               
                <input type="submit" value="Entrar" class="entrar">
            </form>
    </main>

    <!-- javascript-->
    <script src="./assets/js/index.js"></script>
    <script>
        function mostrarSenha(){
            var tipo = document.getElementById("senha");
            if(tipo.type == "password"){
               tipo.type = "text"; 
            }
            else{
                tipo.type = "password"; 
            }
        }
    </script>
    </body>
</html>