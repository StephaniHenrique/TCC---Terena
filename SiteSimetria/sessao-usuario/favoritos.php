<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Favoritos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="./img/logo.png" />
    <link rel="stylesheet" href="./css/interno/universal.css">
    <link rel="stylesheet" href="./css/interno/favoritos.css">
</head>
<body>
    <header>
        <div class="toogle">
            <a href="#"  id="toggleBar">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </a>
            <div class="sidebar" id="bar">
                <div>
                    <div class="antes"></div>
                    <div class="activity">
                        <div class="circle">
                            <div class="icon">
                                <a href="meuPerfil.html">
                                    <img src="./img/homeIcon.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="cobrir"></div>
                    </div>
                </div>
                <div class="depois"></div>
                <div class="two">
                    <a href="novoCaso.html">
                        <img src="./img/ad.png" alt="novo caso">
                    </a>
                </div>
                <div class="three">
                    <a href="pendenciasUsuario.html">
                        <img src="./img/pendencia.png" alt="pendências">
                    </a>
                </div>
                <div class="four">
                    <a href="favoritos.html">
                        <img src="./img/favoritos.png" alt="favoritos">
                    </a>
                </div>
                <div class="five">
                    <a href="adotados.html">
                        
                    <img src="./img/two.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        
        <nav>
            <div class="search">
                <form action="" method="post">
                    <select  name="filtro" id="" >
                        <option value="" disabled selected >filtrar por:</option>
                        <option  value="EI">Ensino Infantil</option>
                        <option value="EF">Ensino Fundamental</option>
                        <option value="EM">Ensino Médio</option>
                        <option value="ET">Ensino Técnico</option>
                    </select>
                    <input type="search" name="search" id="" class="barra" placeholder="Digite o #código, nome, material...">
                </form>
            </div>
            <div class="notifications">
                <img src="./img/not.png" alt="" id="dropNotification">
                <div class="alert"></div>
                <div class="drop-notifications" id="not" >
                    <p class="title">Notificações</p>
                    <div class="content">
                        <div class="user">
                            <img src="./img/fotoPerfil.png" alt="">
                        </div>
                        <div class="text">
                            <p class="not">
                                Mariana Cardoso postou um novo caso, confira
                            </p>
                            <p class="time">
                                há 10 horas
                            </p>
                        </div>
                        <div class="alert"></div>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="./img/fotoPerfil.png" alt="">
                        </div>
                        <div class="text">
                            <p class="not">
                                Mariana Cardoso postou um novo caso, confira
                            </p>
                            <p class="time">
                                há 10 horas
                            </p>
                        </div>
                        <div class="alert"></div>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="./img/fotoPerfil.png" alt="">
                        </div>
                        <div class="text">
                            <p class="not">
                                Mariana Cardoso postou um novo caso, confira
                            </p>
                            <p class="time">
                                há 10 horas
                            </p>
                        </div>
                        <div class="alert"></div>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="./img/fotoPerfil.png" alt="">
                        </div>
                        <div class="text">
                            <p class="not">
                                Mariana Cardoso postou um novo caso, confira
                            </p>
                            <p class="time">
                                há 10 horas
                            </p>
                        </div>
                        <div class="alert"></div>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="./img/fotoPerfil.png" alt="">
                        </div>
                        <div class="text">
                            <p class="not">
                                Mariana Cardoso postou um novo caso, confira
                            </p>
                            <p class="time">
                                há 10 horas
                            </p>
                        </div>
                        <div class="alert"></div>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="./img/fotoPerfil.png" alt="">
                        </div>
                        <div class="text">
                            <p class="not">
                                Mariana Cardoso postou um novo caso, confira
                            </p>
                            <p class="time">
                                há 10 horas
                            </p>
                        </div>
                        <div class="alert"></div>
                    </div>
                    <div class="content">
                        <div class="user">
                            <img src="./img/fotoPerfil.png" alt="">
                        </div>
                        <div class="text">
                            <p class="not">
                                Mariana Cardoso postou um novo caso, confira
                            </p>
                            <p class="time">
                                há 10 horas
                            </p>
                        </div>
                        <div class="alert"></div>
                    </div>
                </div>
            </div>
            <div class="user" id="config">
                <img src="./img/fotoPerfil.png" alt="" class="profile">
                <p>Marmaduke </p>
                <img src="./img/drop.png" alt="" class="drop">

                <div class="config" id="drop">
                    <div class="option">
                        <img src="./img/drop-acount.png" alt="">
                        <p>Conta</p>
                    </div>
                    <div class="option">
                        <img src="./img/history.png" alt="">
                        <p>Histórico</p>
                    </div>
                    <div class="option">
                        <img src="./img/security.png" alt="">
                        <p>Segurança</p>
                    </div>
                    <div class="option">
                        <img src="./img/infos.png" alt="">
                        <p >Duvidas frequentes</p>
                    </div>
                    <div class="option">
                        <img src="./img/mdi_exit-to-app.png" alt="">
                        <p >Sair</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="topo">
            <div class="head">
                <p class="title">Seus favoritos</p>
                <p class="subtitle">
                    Aqui ficam salvos seus casos favoritos
                </p>
            </div>
            <select name="" id="">
                    <option value="" disabled selected >ordenar por:</option>
                    <option value="EI">Ensino Infantil</option>
                    <option value="EF">Ensino Fundamental</option>
                    <option value="EM">Ensino Médio</option>
                    <option value="medioUm">1° Série / 1° Ano</option>
            </select>
        </div>
        <div class="casos">
            <div class="container">
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
                <div class="caso">
                    <img src="./img/fotoPerfil.png" alt="">
                    <p class="title">
                        mochila pra estudar
                    </p>
                    <p class="text">
                        0.33 from "de Finibus Bonorumir exact original form, 
                        accompanied by English versions from the 1914 translation 
                        by H. Rackham.
                    </p>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>
<script src="./js/jquery-3.5.1.min.js"> </script>
<script src="./js/toggle.js"></script>