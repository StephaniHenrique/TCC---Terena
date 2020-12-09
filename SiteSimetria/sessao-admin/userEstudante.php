<?php
include_once("bd_connect/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTUDANTES | USUÁRIOS</title>
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="icon" type="imagem/png" href="./img/logo.png" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/usuarios.css">
    <link rel="stylesheet" href="./css/relatorios.css">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/btns.css">


</head>

<body id="body-pd">
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
                    <a href="relatorios.php" class="nav__link ">
                        <i class='bx bx-note nav__icon'></i>
                        <span class="nav__name">Relatórios</span>
                    </a>
                    <a href="userEstudante.php" class="nav__link active">
                        <i class='bx bxs-user nav__icon'></i>
                        <span class="nav__name">Estudantes</span>
                    </a>
                    <a href="userDoador.php" class="nav__link">
                        <i class='bx bxs-donate-heart nav__icon'></i>
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
                <i class='bx bxs-user'></i>
                <h4>
                    Estudantes
                </h4>
            </div>
            <p>
                Aqui estão os registros dos alunos cadastrados nas intistuições do seus sistema
        </div>


        <div class="tb-result">
            <ul class="tb-head">
                <li>id</li>
                <li>nome</li>
                <li>CPF</li>
                <li>Data de Nascimento</li>
                <li>Cidade </li>
                <li>Estado</li>
                <li>Cod Instituição</li>
                <li>Cod Escolaridade</li>
                <!-- colocar um icone bonitinho aqui -->
                <li> <a href="relatorios/gerar-alunos.php">PDF</a></li>
            </ul>
        </div>

        <div class="resultado"></div>
        <?php

        //Receber o número da página
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        //Setar a quantidade de itens por pagina
        $qnt_result_pg = 5;

        //calcular o inicio visualização
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        $result_usuarios = "SELECT * FROM tbusers WHERE codNivel LIKE 1 LIMIT $inicio, $qnt_result_pg";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) { ?>

            <div class="tb-result">
                <ul class="tb-relatorio">
                    <li class="tb-id"> <?php echo $row_usuario['codUsers']; ?></li>
                    <li class="tb-nome"><?php echo $row_usuario['nomeUsers']; ?></li>
                    <li class="tb-data"><?php echo $row_usuario['cpfUsers']; ?></li>
                    <li class="tb-instituto"><?php echo $row_usuario['nascUsers']; ?></li>
                    <li class="tb-data"><?php echo $row_usuario['cidadeUsers']; ?></li>
                    <li class="tb-data"><?php echo $row_usuario['ufUsers']; ?></li>
                    <li> </li>
                    <li class="tb-data"><?php echo $row_usuario['codInstituicao']; ?></li>
                    <li> </li>
                    <li class="tb-data"><?php echo $row_usuario['codEscolaridade']; ?></li>
                    <li> </li>
                    <li> </li>

                </ul>
            </div>

        <?php

        }
        echo "<center>";
        //Paginção - Somar a quantidade de usuários
        $result_pg = "SELECT COUNT(codUsers) AS num_result FROM tbusers WHERE codNivel LIKE 1";
        $resultado_pg = mysqli_query($conn, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pg['num_result'];
        //Quantidade de pagina 
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

        //Limitar os link antes depois
        echo "<br>";
        $max_links = 2;
        // echo "<center><a href='userEstudante.php?pagina=1'>Primeira</a> ";

        for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
            if ($pag_ant >= 1) {
                echo "<a href='userEstudante.php?pagina=$pag_ant'>$pag_ant</a> ";
            }
        }

        echo "$pagina ";

        for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
            if ($pag_dep <= $quantidade_pg) {
                echo "<a href='userEstudante.php?pagina=$pag_dep'>$pag_dep</a> ";
            }
        }
        echo "</center>";
        // echo "<a href='userEstudante.php?pagina=$quantidade_pg'>Ultima</a></center>";

        ?>


        <!-- modal deletar aqui -->
        <!-- exemplo -->
        <!-- <div id="modaldelet<php echo $row_usuario['codUsers'];?>" class="modal">
        <div class="modal-content">
            <h4>Opa!!</h4>
            <p>Tem certeza que deseja excluir esse Aluno?</p>
        </div>
        <div class="modal-footer">
            <form action="bd_connect/delete-aluno.php" method="POST">
                <input type="hidden" name="codInstituicao" value="<php echo $row_usuario['codInstituicao'];?>">
                <button type="submit" name="btn-del-aluno" class="btn red"> Excluir </button>
                <a href="#!">Cancelar</a>
            </form>
        </div>
    </div> -->
        <!-- fim modal deletar -->
    </main>
    <!-- footer>
            <p>
            Feito com <i class='bx bxs-heart bx-tada' ></i> e em <i class='bx bxs-home-heart bx-tada' ></i> por Terena 
            </p>
        </footer-->

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- javascrip -->
    <script src="./js/script.js"></script>

    <!-- pesquisa -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="pesq_estudante.js"></script>
</body>

</html>