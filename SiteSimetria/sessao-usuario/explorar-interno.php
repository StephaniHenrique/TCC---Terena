<!DOCTYPE html>
<html lang="en">
<head>
    <title>Explorar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css responsavel por menu -->
    <link rel="stylesheet" href="./css/interno/universal.css">
    <link rel="icon" type="imagem/png" href="./img/logo.png" />
    <link rel="stylesheet" href="./css/interno/explorar-interno.css">
</head>
<body>
    <!-- Arrumar index do topo-->
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
                                <a href="explorar.html">
                                    <img src="./img/homeIcon.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="cobrir"></div>
                    </div>
                </div>
                <div class="depois"></div>
                <div class="two">
                    <a href="escolhaCadastro.html">
                        <img src="./img/ad.png" alt="novo caso">
                    </a>
                </div>
                <div class="three">
                    <a href="escolhaCadastro.html">
                        <img src="./img/pendencia.png" alt="pendências">
                    </a>
                </div>
                <div class="four">
                    <a href="escolhaCadastro.html">
                        <img src="./img/favoritos.png" alt="favoritos">
                    </a>
                </div>
                <div class="five">
                    <a href="escolhaCadastro.html">
                        
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
            <form action="#" method="post">
                <div class="filtro">
                    <select name="nivel-escolaridade" class="drop" >
                        <option value="" disabled selected >nivel de escolaridade</option>
                        <option value="EI">Ensino Infantil</option>
                        <option value="EF">Ensino Fundamental</option>
                        <option value="EM">Ensino Médio</option>
                        <option value="ET">Ensino Técnico</option>
                    </select>
                    <input type="text" name="local" placeholder="localização">
                </div>
                <div class="pesquisa">
                    <input type="search" name="search" placeholder="Digite o #código, nome, material..." class="barra">
                    <input type="button" name="search" value="pesquisar" class="pesquisar" onclick="search">
                </div>
            </form>
        </div>
        <div class="tags">
            <a href="#" class="perto">
                <img src="./img/local.png" alt="">
                <p>pertinho de você</p>
            </a>
            <a href="#" class="infantil">
                <img src="./img/kid.png" alt="">
                <p>ensino infantil</p>
            </a>
            <a href="#" class="fundamental">
                <img src="./img/fundamental.png" alt="">
                <p>ensino fundamental</p>
            </a>
            <a href="#" class="medio">
                <img src="./img/medio.png" alt="">
                <p>ensino médio</p>
            </a>
        </div>
        <div class="caso">
            <div class="infos">
                <div>
                    <img src="./img/profile.png" alt="">
                </div>
                <div class="user">
                    <p class="nome">Tais Firmino</p>
                    <p class="horario">ontem ás 15:50</p>
                </div>
                <div class="proximo">
                    <div></div>
                    <p>próximo a você</p>
                </div>
            </div>
            <div class="text">
                <h4>Ajuda para fazer o vestibular</h4>
                <p>Oi, pessoal. Recentemente me inscrevi pro vestibular da FUVEST para ter a possibilidade de ingressar no curso que amo. 
                Infelizmente, fiquei sabendo muuuito em cima da hora do vestibular e não deu mais tempo de conseguir a isenção, e o pagamento 
                do mesmo é até dia 24/09. Ou seja, como todo trabalhador humilde, recebo sempre no 5° dia útil e não tenho um tostão no meu bolso, 
                já que tá super em cima da hora pra conseguir realizar esse pagamento. Será que vocês conseguiriam me ajudar a bater essa meta pra 
                conseguir pagar o boleto? Cada centavo será aceito com muito amor ♥ Obrigada!
                </p>
            </div>
            <div class="actions">
                <div class="fav">
                    <label class="like">
                        <input type="checkbox"/>
                        <div class="hearth"></div>
                      </label>
                    <p>favoritar</p>
                </div>
                <div class="hero">
                    <div class="sime"></div>
                    <a href="#">ser heroi</a>
                </div>
                <div class="share">
                    <div class="compartilhar"></div>
                    <a href="#">compartilhar</a>
                </div>
            </div>
        </div>

        <div class="caso">
            <div class="infos">
                <div>
                    <img src="./img/profile.png" alt="">
                </div>
                <div class="user">
                    <p class="nome">Tais Firmino</p>
                    <p class="horario">ontem ás 15:50</p>
                </div>
                <div class="proximo">
                    <div></div>
                    <p>próximo a você</p>
                </div>
            </div>
            <div class="text">
                <h4>Ajuda para fazer o vestibular</h4>
                <p>Oi, pessoal. Recentemente me inscrevi pro vestibular da FUVEST para ter a possibilidade de ingressar no curso que amo. 
                Infelizmente, fiquei sabendo muuuito em cima da hora do vestibular e não deu mais tempo de conseguir a isenção, e o pagamento 
                do mesmo é até dia 24/09. Ou seja, como todo trabalhador humilde, recebo sempre no 5° dia útil e não tenho um tostão no meu bolso, 
                já que tá super em cima da hora pra conseguir realizar esse pagamento. Será que vocês conseguiriam me ajudar a bater essa meta pra 
                conseguir pagar o boleto? Cada centavo será aceito com muito amor ♥ Obrigada!
                </p>
            </div>
            <div class="actions">
                <div class="fav">
                    <label class="like">
                        <input type="checkbox"/>
                        <div class="hearth"></div>
                      </label>
                    <p>favoritar</p>
                </div>
                <div class="hero">
                    <div class="sime"></div>
                    <a href="#">ser heroi</a>
                </div>
                <div class="share">
                    <div class="compartilhar"></div>
                    <a href="#">compartilhar</a>
                </div>
            </div>
        </div>
        <div class="caso">
            <div class="infos">
                <div>
                    <img src="./img/profile.png" alt="">
                </div>
                <div class="user">
                    <p class="nome">Tais Firmino</p>
                    <p class="horario">ontem ás 15:50</p>
                </div>
                <div class="proximo">
                    <div></div>
                    <p>próximo a você</p>
                </div>
            </div>
            <div class="text">
                <h4>Ajuda para fazer o vestibular</h4>
                <p>Oi, pessoal. Recentemente me inscrevi pro vestibular da FUVEST para ter a possibilidade de ingressar no curso que amo. 
                Infelizmente, fiquei sabendo muuuito em cima da hora do vestibular e não deu mais tempo de conseguir a isenção, e o pagamento 
                do mesmo é até dia 24/09. Ou seja, como todo trabalhador humilde, recebo sempre no 5° dia útil e não tenho um tostão no meu bolso, 
                já que tá super em cima da hora pra conseguir realizar esse pagamento. Será que vocês conseguiriam me ajudar a bater essa meta pra 
                conseguir pagar o boleto? Cada centavo será aceito com muito amor ♥ Obrigada!
                </p>
            </div>
            <div class="actions">
                <div class="fav">
                    <label class="like">
                        <input type="checkbox"/>
                        <div class="hearth"></div>
                      </label>
                    <p>favoritar</p>
                </div>
                <div class="hero">
                    <div class="sime"></div>
                    <a href="#">ser heroi</a>
                </div>
                <div class="share">
                    <div class="compartilhar"></div>
                    <a href="#">compartilhar</a>
                </div>
            </div>
        </div>
        <div class="caso">
            <div class="infos">
                <div>
                    <img src="./img/profile.png" alt="">
                </div>
                <div class="user">
                    <p class="nome">Tais Firmino</p>
                    <p class="horario">ontem ás 15:50</p>
                </div>
                <div class="proximo">
                    <div></div>
                    <p>próximo a você</p>
                </div>
            </div>
            <div class="text">
                <h4>Ajuda para fazer o vestibular</h4>
                <p>Oi, pessoal. Recentemente me inscrevi pro vestibular da FUVEST para ter a possibilidade de ingressar no curso que amo. 
                Infelizmente, fiquei sabendo muuuito em cima da hora do vestibular e não deu mais tempo de conseguir a isenção, e o pagamento 
                do mesmo é até dia 24/09. Ou seja, como todo trabalhador humilde, recebo sempre no 5° dia útil e não tenho um tostão no meu bolso, 
                já que tá super em cima da hora pra conseguir realizar esse pagamento. Será que vocês conseguiriam me ajudar a bater essa meta pra 
                conseguir pagar o boleto? Cada centavo será aceito com muito amor ♥ Obrigada!
                </p>
            </div>
            <div class="actions">
                <div class="fav">
                    <label class="like">
                        <input type="checkbox"/>
                        <div class="hearth"></div>
                      </label>
                    <p>favoritar</p>
                </div>
                <div class="hero">
                    <div class="sime"></div>
                    <a href="#">ser heroi</a>
                </div>
                <div class="share">
                    <div class="compartilhar"></div>
                    <a href="#">compartilhar</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
<script src="./js/jquery-3.5.1.min.js"> </script>
<script src="./js/toggle.js"></script>