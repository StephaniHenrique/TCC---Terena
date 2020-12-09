<?php
include "bd_connect/conexao.php";

// Casos Cadastrados
$vcasos = 1;
$sql = "SELECT * FROM tbpublicacaousuario";
$res = mysqli_query($conn, $sql);
$lin = mysqli_num_rows($res);

// Casos resolvidos
$vcdoacoes = 1;
$sql = "SELECT * FROM tbdoacao";
$resp = mysqli_query($conn, $sql);
$d = mysqli_num_rows($resp);

// Usuarios
// Casos resolvidos
$vusers = 1;
$sql = "SELECT * FROM tbusers";
$resps = mysqli_query($conn, $sql);
$u = mysqli_num_rows($resps);

// instituições
$vinstituicao = 1;
$sql = "SELECT * FROM tbinstituicao";
$respo = mysqli_query($conn, $sql);
$i = mysqli_num_rows($respo);

// Doadores
$vcdoacoes = 1;
$sql = "SELECT * FROM tbusers WHERE codNivel = '3'";
$resp = mysqli_query($conn, $sql);
$Doadores = mysqli_num_rows($resp);

// Estudantes
$vusers = 1;
$sql = "SELECT * FROM tbusers WHERE codNivel = '1'";
$resps = mysqli_query($conn, $sql);
$Estudantes = mysqli_num_rows($resps);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO | Olá admin!</title>
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="icon" type="imagem/png" href="./img/logo.png" />
    <link rel="stylesheet" href="./css/style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Doadores', <?php echo $Doadores; ?>],
                ['Estudantes', <?php echo $Estudantes; ?>],
                ['Instituições', <?php echo $i; ?>],

            ]);

            var options = {
                pieHole: 0.4,
                colors: ['#d395ff', '#945acd', '#4a2e6f'],
                backgroundColor: 'transparent'
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>

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
                    <a href="index.php" class="nav__link active">
                        <i class='bx bxs-dashboard nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <a href="relatorios.php" class="nav__link ">
                        <i class='bx bx-note nav__icon'></i>
                        <span class="nav__name">Relatórios</span>
                    </a>
                    <a href="userEstudante.php" class="nav__link">
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
        <section class="home" id="home">
            <div class="homeContainer bd-container bd-grid">
                <div class="homeData">
                    <h1 class="homeTitle">
                        Seja bem vinda(o), admin!
                    </h1>
                    <h2 class="homeSubtitle">
                        tenha um bom dia de trabalho e lembre-se sempre </br>de fazer o melhor.
                    </h2>
                </div>
                <img src="./img/ilustra.png" alt="" class="homeImg">
            </div>
        </section>
        <section class="two">
            <div class="twoDados">
                <div class="twoTitle">
                    <i class='bx bxs-error-alt'></i>
                    <h2>Dados importantes</h2>
                </div>
                <p>saiba mais sobre esses dados hoje</p>


                <div class="twoGrid">
                    <div class="one">
                        <i class='bx bxs-message-alt-detail'></i>
                        <h3>
                            casos </br> cadastrados
                        </h3>
                        <p>
                            <?php echo $lin; ?>
                        </p>
                    </div>
                    <div class="one">
                        <i class='bx bxs-donate-heart'></i>
                        <h3>
                            doações </br> feitas
                        </h3>
                        <p>
                            <?php echo $d; ?>
                        </p>
                    </div>
                    <div class="one">
                        <i class='bx bxs-user-circle'></i>
                        <h3>
                            usuários </br> cadastrados
                        </h3>
                        <p>
                            <?php echo $u; ?>
                        </p>
                    </div>
                    <div class="one">
                        <i class='bx bxs-message-alt-check'></i>
                        <h3>
                            Instituições </br> Cadastradas
                        </h3>
                        <p>
                            <?php echo $i;
                            mysqli_close($conn); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="twoDados">
                <div class="twoTitle">
                    <i class='bx bxs-error-alt'></i>
                    <h2>Acompanhe o crescimento</h2>
                </div>
                <p>vizualize melhor os dados com gráficos</p>

                <div class="chart">
                        <div id="donutchart" style="width: 800px; height: 500px; margin-left: -12vw; margin-top: -15vh;"></div>
                </div>
            </div>
        </section>
        
    </main>
    <!-- javascrip -->
    <script src="./js/script.js"></script>
</body>

</html>