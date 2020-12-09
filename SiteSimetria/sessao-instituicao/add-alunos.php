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
        <link rel="stylesheet" href="./css/alunos.css">

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
                        <a href="index.php" class="nav__link ">
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
                        <a href="alunos.php" class="nav__link active">
                            <i class='bx bxs-group nav__icon'></i>
                            <span class="nav__name">alunos </br>cadastrados</span>
                        </a>
                    </div>
                    
                </div>
                <a href="#" class="nav__link">
                        <i class='bx bx-log-out nav__icon'></i>
                        <span class="nav__name">sair</span>
                    </a>
            </nav>
        </div>
        <!-- ======================= conteudo ====================== -->
        <main class="l-main">
            <section class="herois">
                <div class="title">
                <i class='bx bxs-group nav__icon'></i>
                    <h4>Solicitações</h4>
                </div>
                <div class="herois__grid">
                    <?php
                    
                    include_once '../banco/conexao.php';

                        $casoquery = $connect->prepare("SELECT * 
                        FROM tbusers as B
                        INNER JOIN tbinstituicao as C on B.codInstituicao = C.codInstituicao
                        WHERE B.codInstituicao = $id and B.statusUser = 'inativo' or B.statusUser = null

                        ");
                        
                        $casoquery->execute();

                        if($casoquery->rowCount() > 0):

                        while( $caso = $casoquery->fetch(PDO::FETCH_ASSOC)):
                        
                        ?>
                        <div class="herois__perfil" id="btn">
                            <img src="./img/fotoGrande.png" alt="">
                            <p>
                                <?php echo $caso['nomeUsers']; ?>
                            </p>
                            <!--button id="btn" class="btn">ver mais</button-->
                        </div>
                        <div class="modal">
                            <div class="closeModal">
                                <button class="btn-close" id="close">
                                    <i class='bx bx-x'></i>
                                </button>
                            </div>
                            

                            <div class="motivoModal">
                                <h3>Este aluno pertence a sua instituição?</h3>
                                <p><?php echo $caso['nomeUsers'] ;
                                        echo " - #"  ;
                                        echo  $caso['iduser'] ;
                                ?> </p>
                            </div>

                            <div class="btn-modal">
                                <form action="#" method="post">
                                    <input type="submit" value="aceitar aluno" class="btn-excluir" name="aceitar">
                                    <input type="submit" value="negar pedido" class="btn-anular" name="anular">
                                </form>
                                
                                <?php
                                    include_once '../banco/conexao.php';

                                    if(isset($_POST['aceitar'])){
                                        $idaluno = $caso['iduser'];
                                        $st = "ativo";

                                          
                                        $stmt = $connect->prepare('UPDATE tbusers SET statusUser = :statusUser
                                        WHERE iduser = :iduser');
                                        
                                        $stmt->execute(array(
                                              ':iduser'   => $idaluno,
                                              ':statusUser' => $st
                                            ));
                                          
                                        if($stmt->rowCount()>0){
                                                echo "<script>window.location = 'alunos.php'</script>";
                                          }
                                        
                                    }

                                    else if(isset($_POST['anular'])){
                                        $idaluno = $caso['iduser'];
                                        $stt = "ptivo";

                                          
                                        $stmt = $connect->prepare('UPDATE tbusers SET statusUser = :statusUser
                                        WHERE iduser = :iduser');
                                        
                                        $stmt->execute(array(
                                              ':iduser'   => $idaluno,
                                              ':statusUser' => $stt
                                            ));

                                        
                                        if($stmt->rowCount()>0){
                                            $idaluno = $caso['iduser'];
                                            $codd= "0";

                                            
                                            $stt = $connect->prepare('UPDATE tbusers SET codInstituicao = :codInstituicao
                                            WHERE iduser = :iduser');
                                            
                                            $stt->execute(array(
                                                ':iduser'   => $idaluno,
                                                ':codInstituicao' => $codd
                                                ));

                                                if($stt->rowCount()>0){
                                                      echo "<script>window.location = 'alunos.php'</script>";
                                                }
                                        }
                                          
                                      
                                    }
                                    
                                    
                                ?>
                            </div>
                            
                        </div>
                        <?php endwhile; 
                   else:?>
                        <p>Por enquanto nada para ver aqui, chame seus alunos para se inscrever<p>
                        
                    <?php
                    endif; ?> 
                </div>
            </section>
        </main>
        
        
        
        <!-- javascrip -->
        <script src="./js/script.js"></script>
        <script>
            document.getElementById("btn").addEventListener("click",function(){
                document.querySelector(".modal").style.display ="block";
            })
            
            document.querySelector(".btn-close").addEventListener("click", function(){
                document.querySelector(".modal").style.display = "none";
            })
            
        </script>
    </body>
</html>

