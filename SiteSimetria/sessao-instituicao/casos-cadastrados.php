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
    


    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- fazer search
    mudar classes
fazer modal -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casos cadastrados</title>
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
                        <a href="index.php" class="nav__link">
                            <i class='bx bxs-home nav__icon'></i>
                            <span class="nav__name">inicio</span>
                        </a>
                        <a href="novo-caso.php" class="nav__link  ">
                            <i class='bx bxs-comment-add nav__icon' ></i>
                            <span class="nav__name">novo caso</span>
                        </a>
                        <a href="pendencias.php" class="nav__link">
                            <i class='bx bxs-pin nav__icon' ></i>
                            <span class="nav__name">pendências</span>
                        </a>
                        <a href="casos-cadastrados.php" class="nav__link active">
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
        <main class="l-main">
        <section class="casos__cadastrados">
                <div class="title">
                    <i class='bx bxs-message-alt-edit'></i>
                    <p>casos cadastrados</p>
                </div>
                <div class="cadastrados__grid">
                    <?php
                    
                    include_once '../banco/conexao.php';

                        $casoquery = $connect->prepare("SELECT *
                            FROM tbpublicacaousuario as A
                            INNER JOIN tbpublicacao as B on B.codPublicacao = A.codPublicacao
                            INNER JOIN tbusers as C on C.codUsers = A.codUsuario
                            INNER JOIN tbinstituicao as D on C.codInstituicao = D.codInstituicao
                            where D.codInstituicao = $id

                        ");
                        $casoquery->execute();

                        if($casoquery->rowCount() > 0):

                        while( $caso = $casoquery->fetch(PDO::FETCH_ASSOC)):
                        
                        ?>

                        <div class="caso">
                            <div class="user">
                                <img src="./img/fotoPerfil.png">
                                <h4><?php $caso['nomeUsers'];?></h4>
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
            
        </main>
        
    </body>
    <!-- javascript -->
    <script src="./js/script.js"></script>
</html>