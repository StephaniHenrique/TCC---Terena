<?php
    //conexão
    include_once '../banco/conexao.php';

    //iniciar sessão e verificar se existe
    session_start();
    //se existir entra
    if(isset($_SESSION["instituto"]) && is_array($_SESSION["instituto"])){
        $nome = $_SESSION["instituto"][0];
        $id = $_SESSION["instituto"][1];
        $adm = $_SESSION["instituto"][2];
        $codUnico = $_SESSION["instituto"][3];
        $modalidade = $_SESSION["instituto"][4];
        $porteMatricula = $_SESSION["instituto"][5];
        $totalMatricula = $_SESSION["instituto"][6];
        $cep = $_SESSION["instituto"][7];
        $uf = $_SESSION["instituto"][8];
        $complem = $_SESSION["instituto"][9];
        $cidade = $_SESSION["instituto"][10];
        $bairro = $_SESSION["instituto"][11];
        $municipio = $_SESSION["instituto"][12];
        $log = $_SESSION["instituto"][13];
        $num = $_SESSION["instituto"][14];
        $img = $_SESSION["instituto"][15];
        $codFone = $_SESSION["instituto"][16];
        $codLogin = $_SESSION["instituto"][17];
    }
    //se não, volta para o login
    else{
        echo "<script>window.location = '../login.php'</script>"; 
    }

    $query = $connect->prepare("SELECT * FROM tbfoneinstituicao WHERE codFoneInstituicao = $codFone ");
    $query->execute();
    $contact = $query->fetchAll(PDO::FETCH_ASSOC)[0];
           
    $fone = $contact['NumeroFoneInstituicao'];
    $celfone = $contact['CelularFoneInstituicao'];

    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- contar casos
        contar casos resolvidos
        criar modal de caso
        contar pessoas que doaram
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $nome; ?></title>
        <!-- icons -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!-- css -->
        <link rel="icon" type="imagem/png" href="./img/logo.png" />
        <link rel="stylesheet" href="./css/style.css">
        

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
                    <img src="./img/fotoPerfil.png">
                    <p><?php echo $nome; ?> </p>
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
                        <a href="index.php" class="nav__link active">
                            <i class='bx bxs-home nav__icon'></i>
                            <span class="nav__name">inicio</span>
                        </a>
                        <a href="novo-caso.php" class="nav__link">
                            <i class='bx bxs-comment-add nav__icon' ></i>
                            <span class="nav__name">novo caso</span>
                        </a>
                        <a href="pendencias.php" class="nav__link">
                            <i class='bx bxs-pin nav__icon' ></i>
                            <span class="nav__name">pendências</span>
                        </a>
                        <a href="casos-cadastrados.php" class="nav__link">
                            <i class='bx bxs-message-square-edit nav__icon'></i>
                            <span class="nav__name">casos cadastrados</span>
                        </a>
                        <a href="alunos.php" class="nav__link">
                            <i class='bx bxs-group nav__icon'></i>
                            <span class="nav__name">alunos </br>cadastrados</span>
                        </a>
                    </div>
                    
                </div>
                <a href="../index.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon'></i>
                    <span class="nav__name">sair</span>
                </a>
            </nav>
        </div>
        <!-- ======================= conteudo ====================== -->
        <main class="l-main">
            <div class="profile__infos">
                <img src="./img/fotoGrande.png" alt="">
                <div class="profile__titles">
                    <h4><?php echo $nome; ?></h4>
                    <p>Escola <?php echo $adm; ?> <?php echo $modalidade;?></p>
                </div>
            </div>
            <div class="infos__grid">
                <div>
                    <i class='bx bxs-message-square-edit'></i>
                    <p>casos </br> cadastrados</p>
                    <p>0</p>
                       
                </div>
                <div>
                    <i class='bx bxs-group'></i>
                    <p>alunos </br>cadastrados</p>
                    <p><?php echo $totalMatricula; ?>/<?php echo $porteMatricula; ?></p>
                </div>
                <div>
                    <i class='bx bxs-bookmark-heart' ></i>
                    <p>casos</br>resolvidos</p>
                    <p>0/0</p>
                </div>
                <div>
                    <i class='bx bxs-donate-heart' ></i>
                    <p>doações</br>feitas</p>
                    <p>0</p>
                </div>
            </div>
            <div class="local__infos">
                <div class="infos">
                    <div class="title">
                        <i class='bx bxs-map'></i>
                        <p>endereço </p>
                    </div>
                    <p><?php echo $log; ?>, <?php echo $num; ?> - <?php echo $bairro; ?>, <?php echo $cidade; ?> - <?php echo $uf; ?>, <?php echo $cep; ?></p>
                </div>
                <div div class="infos">
                    <div class="title">
                        <i class='bx bxs-phone'></i>
                        <p>telefone</p>
                    </div>
                    <p><?php echo $fone; ?></p>
                    <p>  <?php echo  $celfone; ?> </p>
                </div>
            </div>
            <section class="casos__cadastrados">
                <div class="title">
                    <i class='bx bxs-message-alt-edit'></i>
                    <p>casos cadastrados</p>
                </div>
                <div class="cadastrados__grid">
                    <?php
                    
                    include_once '../banco/conexao.php';

                        $casoquery = $connect->prepare("SELECT C.codPublicacao , F.codInstituicao, C.tituloPublicacao, C.descricaoPublicacao, 
                        C.dataPublicacao, C.fotoPublicacao, C.status, I.nomeInstituicao, I.admInstituicao, I.coddaInstituicao, I.modalidadeInstituicao 
                        FROM tbpublicacaoinstitu as F 
                        INNER JOIN tbpublicacao as C on C.codPublicacao = F.codPublicacao 
                        INNER JOIN tbinstituicao as I on F.codInstituicao = I.codInstituicao 
                        WHERE F.codInstituicao = $id and C.status != 'inativo'
                        ");
                        $casoquery->execute();

                        if($casoquery->rowCount() > 0):

                        while( $caso = $casoquery->fetch(PDO::FETCH_ASSOC)):
                        
                        ?>

                        <div class="caso">
                            <div class="user">
                                <img src="./img/fotoPerfil.png">
                                <h4><?php echo $nome; ?></h4>
                            </div>
                            <h4><?php echo $caso['tituloPublicacao']; ?></h4>
                            <p>
                                <?php 
                                $limite = 150;
                                $tamanho = strlen( $caso['descricaoPublicacao']);

                                if($tamanho <= $limite){
                                    echo $caso['descricaoPublicacao'];
                                }else{
                                    $novoTexto = trim(substr($caso['descricaoPublicacao'],0,$limite)).".... <a href='novo-caso.php'>Ver mais</a>";
                                    echo $novoTexto;
                                }

                                ?>
                            </p> 
                        </div> 

                        <?php endwhile; 
                else:?>
                        <p>Nenhum caso registrado<p>
                    <?php
                    endif; ?>     
                </div>
            </section>
            <section class="casos__resolvidos">
                <div class="title">
                    <i class='bx bxs-message-alt-check' ></i>
                    <p>casos resolvidos</p>
                </div>
                <div class="resolvidos__grid">
                <?php
                    
                    include_once '../banco/conexao.php';

                        $casoquery = $connect->prepare("SELECT C.codPublicacao , F.codInstituicao, C.tituloPublicacao, C.descricaoPublicacao, 
                        C.dataPublicacao, C.fotoPublicacao, C.status, I.nomeInstituicao, I.admInstituicao, I.coddaInstituicao, I.modalidadeInstituicao 
                        FROM tbpublicacaoinstitu as F 
                        INNER JOIN tbpublicacao as C on C.codPublicacao = F.codPublicacao 
                        INNER JOIN tbinstituicao as I on F.codInstituicao = I.codInstituicao 
                        WHERE F.codInstituicao = $id and C.status = 'inativo'
                        ");
                        $casoquery->execute();

                        if($casoquery->rowCount() > 0):

                        while( $caso = $casoquery->fetch(PDO::FETCH_ASSOC)):
                        
                        ?>

                        <div class="caso">
                            <div class="user">
                                <img src="./img/fotoPerfil.png">
                                <h4><?php echo $nome; ?></h4>
                            </div>
                            <h4><?php echo $caso['tituloPublicacao']; ?></h4>
                            <p>
                                <?php 
                                $limite = 150;
                                $tamanho = strlen( $caso['descricaoPublicacao']);

                                if($tamanho <= $limite){
                                    echo $caso['descricaoPublicacao'];
                                }else{
                                    $novoTexto = trim(substr($caso['descricaoPublicacao'],0,$limite)).".... <a href='novo-caso.php'>Ver mais</a>";
                                    echo $novoTexto;
                                }

                                ?>
                            </p> 
                        </div> 

                        <?php endwhile; 
                else:?>
                        <p>Nenhum caso resolvido<p>
                    <?php
                    endif; ?>  
                </div>
            </section>
            <section class="herois">
                <div class="title">
                    <i class='bx bxs-donate-heart'></i> 
                    <h4>quem já ajudou</h4>
                </div>
                <div class="herois__grid">
                <?php
                    
                    include_once '../banco/conexao.php';

                        $doadorquery = $connect->prepare("SELECT E.nomeUsers
                        FROM `tbdoacao` as A 
                        INNER JOIN tbpublicacao as B on B.codPublicacao = A.codPublicacao
                        INNER JOIN tbpublicacaoinstitu as C on C.codPublicacao = B.codPublicacao
                        INNER JOIN tbinstituicao as D on D.codInstituicao = C.codInstituicao
                        INNER JOIN tbusers as E on E.codUsers = A.codUsers
                        where D.codInstituicao = $id

                        ");
                        
                        $doadorquery->execute();

                        if($doadorquery->rowCount() > 0):

                        while( $doador = $doadorquery->fetch(PDO::FETCH_ASSOC)):
                        
                        ?>
                         <div class="herois__perfil">
                            <img src="./img/fotoGrande.png" alt="">
                            <p><?php echo $doador['nomeUsers']; ?></p>
                        </div>
                        <?php endwhile; 
                   else:?>
                        <p>nenhuma doação registrada<p>
                        
                    <?php
                    endif; ?> 
                </div>
            </section>
        </main>
        
        
        
        <!-- javascrip -->
        <script src="./js/script.js"></script>
    </body>
</html>

