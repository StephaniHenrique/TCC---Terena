<?php
    //iniciar sessão e verificar se existe
    session_start();
    //se existir entra
    if(isset($_SESSION["aluno"]) && is_array($_SESSION["aluno"])){
        $id = $_SESSION["aluno"][1];
        $nome = $_SESSION["aluno"][0];
    }
    //se não, volta para o login
    else{
        echo "<script>window.location = '../login.php'</script>"; 
    }
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title><?php echo $nome; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="imagem/png" href="./img/logo.png" />
        <link rel="stylesheet" href="./css/interno/universal.css">
        <link rel="stylesheet" href="./css/interno/meuPerfil.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                    <p><?php echo $nome; ?></p>
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
        <div class="topo">
            <div class="infos">
                <img src="./img/fotoGrande.png" alt="">
                <div class="user">
                    <p class="title">
                    <?php echo $nome; ?>
                    </p>
                    <p class="subtitle">
                        E.E. Francisco de Assis Gonzaga  - Ensino Médio
                    </p>
                </div>
                <a href="novoCaso.html" class="btn-criar">criar novo caso</div>
            </div>
        </div>
        <div class="tags">
            <a href="#" class="one">
                <img src="./img/cadastrados.png" alt="" class="cad">
                <p class="title">casos cadastrados</p>
                <p class="subtitle">4</p>
            </a>
            <a href="#" class="one">
                <img src="./img/conquistas.png" alt="" class="conq">
                <p class="title">conquistas</p>
                <p class="subtitleb">0/16</p>
            </a>
            <a href="#" class="one" >
                <img src="./img/paper.png" alt="" class="paper">
                <p class="title">casos
                    resolvidos</p>
                <p class="subtitle">3</p>
            </a>
            <a href="#" class="one">
                <img src="./img/student.png" alt="">
                <p class="title">doações
                    feitas</p>
                <p class="subtitleb">1</p>
            </a> 
        </div>
        <main>
            <section class="casos">
                <div class="title">
                    <img src="./img/meusCadastrados.png" alt="">
                    <p>Meus casos cadastrados</p>
                </div>
                <div class="container">
                    <div class="caso">
                        <img src="./img/fotoPerfil.png" alt="">
                        <p class="title">Bolsa para estudar</p>
                        <p class="texto">
                            Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                        </p>
                    </div>
                    <div class="caso">
                        <img src="./img/fotoPerfil.png" alt="">
                        <p class="title">Bolsa para estudar</p>
                        <p class="texto">
                            Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                        </p>
                    </div>
                    <div class="caso">
                        <img src="./img/fotoPerfil.png" alt="">
                        <p class="title">Bolsa para estudar</p>
                        <p class="texto">
                            Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                        </p>
                    </div>
                    <div class="caso">
                        <img src="./img/fotoPerfil.png" alt="">
                        <p class="title">Bolsa para estudar</p>
                        <p class="texto">
                            Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                        </p>
                </div>
                <div class="container disabled" id="container">
                    <div class="caso" >
                        <img src="./img/fotoPerfil.png" alt="">
                        <p class="title">Bolsa para estudar</p>
                        <p class="texto">
                            Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                        </p>
                    </div>
                        <div class="caso">
                            <img src="./img/fotoPerfil.png" alt="">
                            <p class="title">Bolsa para estudar</p>
                            <p class="texto">
                                Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                            </p>
                        </div>
                        <div class="caso">
                            <img src="./img/fotoPerfil.png" alt="">
                            <p class="title">Bolsa para estudar</p>
                            <p class="texto">
                                Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                            </p>
                        </div>
                </div>
                </div>
                <div class="btn-mais" id="verMais">
                    ver mais
                </div>
            </section>
            <section class="conquistas">
                <div class="title">
                    <img src="./img/minhasConquistas.png" alt="">
                    <p>Minhas Conquistas</p>
                </div>
                <div class="container">
                    <div class="col">
                        <img src="./img/conquistaOne.png" alt="" class="on">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">30/30</p>
                    </div>
                    <div class="col">
                        <img src="./img/conquista.png" alt="" class="on">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">30/30</p>
                    </div>
                    <div class="col">
                        <img src="./img/conquistaNot.png" alt="" class="trofeu">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">25/30</p>
                    </div>
                    <div class="col">
                        <img src="./img/conquistaNot.png" alt="" class="trofeu">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">10/30</p>
                    </div>
                </div>
                <div class="container off">
                    <div class="col">
                        <img src="./img/conquistaNot.png" alt="" class="trofeu">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">30/30</p>
                    </div>
                    <div class="col">
                        <img src="./img/conquistaNot.png" alt="" class="trofeu">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">30/30</p>
                    </div>
                    <div class="col">
                        <img src="./img/conquistaNot.png" alt="" class="trofeu">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">25/30</p>
                    </div>
                    <div class="col">
                        <img src="./img/conquistaNot.png" alt="" class="trofeu">
                        <p class="title">escola exemplar</p>
                        <p class="texto">ter 30 alunos cadastrados</p>
                        <p class="contador">10/30</p>
                    </div>
                </div>
            </section>
            <section class="casos">
                <div class="title">
                    <img src="./img/meusCadastrados.png" alt="">
                    <p>Casos resolvidos</p>
                </div>
                <div class="container">
                    <div class="caso">
                        <img src="./img/fotoPerfil.png" alt="">
                        <p class="title">Bolsa para estudar</p>
                        <p class="texto">
                            Não ganhei a isenção do vestibular da Unesp e preciso urgentemente 
                            paga-lo. Ajudem a vestibulanda do cursinho popular da Unesp. Atualização: 
                            pessoal, algumas pessoas maravilhosas me ajudaram e eu já consegui o dinheiro 
                            da isenção da unesp, conversando com uma dessas pessoas ela me ofereceu ainda 
                            mais ajuda.
                        </p>
                    </div>
                </div>
            </section>
            <section class="doacoes"> 
                <div class="title">
                    <img src="./img/tres.png" alt="">
                    <p>Doações feitas</p>
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
            </section>
        </main>

    </body>
</html>
<script src="./js/jquery-3.5.1.min.js"> </script>
<script src="./js/toggle.js"></script>
