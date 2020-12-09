<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	


<?php
//Incluir a conexão com banco de dados
include_once 'bd_connect/conexao.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM tbusers WHERE nomeUsers LIKE '%$usuarios%' LIMIT 20";
$resultado_user = mysqli_query($conn, $result_user);

$result_inst = "SELECT * FROM tbinstituicao WHERE nomeInstituicao LIKE '%$usuarios%' LIMIT 20";
$resultado_inst = mysqli_query($conn, $result_inst);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){ ?>
	<div class="tb-result">
	<ul class="tb-relatorio">
		<li class="tb-nome"><?php echo $row_user['codUsers']; ?></li>
		<li class="tb-id"><?php echo $row_user['nomeUsers']; ?></li>
		<li class="tb-data"><?php echo $row_user['nascUsers']; ?></li>
		<li class="tb-data"><?php echo $row_user['cpfUsers']; ?></li>
		<li class="tb-data"><?php echo $row_user['cepUsers']; ?></li>
		<li class="tb-data"><?php echo $row_user['sexoUsers']; ?></li>
		<li class="tb-data"><?php echo $row_user['codInstituicao']; ?></li>
		<li class="tb-data"><?php echo $row_user['codEscolaridade']; ?></li>
		<li class="tb-data"><?php echo $row_user['iduser']; ?></li>
		<li class="tb-data"><?php echo $row_user['codNivel']; ?></li>
		<li></li>
    </ul>   
    </div>
	<?php
	}
	}
	if(($resultado_inst) AND ($resultado_inst->num_rows != 0 )){
		while($row_inst = mysqli_fetch_assoc($resultado_inst)){ ?>
		<div class="tb-result">
        <ul class="tb-head">
                    <li>ID</li>
                    <li>Nome da Instituição</li>
                    <li>Identificação</li>
                    <li>Dependencia</li>
                    <li>Ensino</li>
                    <li>Porte de Matriculas</li>
                    <li>Total de Matriculas</li>
                    <li>CEP</li>
                    <li>Acesso</li>
                    <li>Nivel</li>
					<li></li>
                </ul>
                </div> <br>
		<div class="tb-result">
		<ul class="tb-relatorio">
			<li class="tb-nome"><?php echo $row_inst['codInstituicao']; ?></li>
			<li class="tb-id"><?php echo $row_inst['nomeInstituicao']; ?></li>
			<li class="tb-data"><?php echo $row_inst['coddaInstituicao']; ?></li>
			<li class="tb-data"><?php echo $row_inst['admInstituicao']; ?></li>
			<li class="tb-data"><?php echo $row_inst['modalidadeInstituicao']; ?></li>
			<li class="tb-data"><?php echo $row_inst['portematriculaInstituicao']; ?></li>
			<li class="tb-data"><?php echo $row_inst['totalmatriculaInstituicao']; ?></li>
			<li class="tb-data"><?php echo $row_inst['cepInstituicao']; ?></li>
			<li class="tb-data"><?php echo $row_inst['codLoginInstituicao']; ?></li>
			<li class="tb-data">2</li>
			<li></li>
		</ul>   
		</div> <br>
	
		<?php
		}
	}else {
		echo "Nenhum usuário encontrado ...";
	}
?>


</body>
</html>
