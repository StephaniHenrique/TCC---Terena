<?php
    //sessão
    session_start();
    //conexão
    require_once 'conexaoo.php';

    $nome = mysqli_escape_string($connect, $_GET['nome']);
    $cod = mysqli_escape_string($connect, $_GET['codInst']);
    $adm = mysqli_escape_string($connect, $_GET['depAdm']);
    $mod = mysqli_escape_string($connect, $_GET['modEnsino']);
    $porte = mysqli_escape_string($connect, $_GET['porteMatricula']);
    $mat = mysqli_escape_string($connect, $_GET['numMatriculados']);
    $cidade = mysqli_escape_string($connect, $_GET['cidade']);
    $municipio = mysqli_escape_string($connect, $_GET['municipio']);
    $cep = mysqli_escape_string($connect, $_GET['cep']);
    $uf = mysqli_escape_string($connect, $_GET['uf']);
    $bairro = mysqli_escape_string($connect, $_GET['bairro']);
    $rua = mysqli_escape_string($connect, $_GET['rua']);
    $numero = mysqli_escape_string($connect, $_GET['num']);
    $complemento = mysqli_escape_string($connect, $_GET['comp']);
    // $img = mysqli_escape_string($connect, $_FILES['img'] ['tmp_name']);
    // $nomeimg = mysqli_escape_string($connect, $_FILES['img'] ['name']);
    
    $sql = "SELECT MAX(codLoginInstituicao) FROM tblogininstituicao order BY codLoginInstituicao DESC";

    $result = $connect->query($sql);
    $row = mysqli_fetch_array($result , MYSQLI_NUM);
    $codLoginInstituicao = $row[0];    

    $sql = "SELECT MAX(codFoneInstituicao) FROM tbfoneinstituicao order BY codFoneInstituicao DESC";

    $result1 = $connect->query($sql);
    $row1 = mysqli_fetch_array($result , MYSQLI_NUM);
    $codFoneInstituicao = $row[0];    
        
     $sql = "INSERT INTO tbinstituicao (nomeInstituicao, coddaInstituicao, 	admInstituicao , modalidadeInstituicao,  portematriculaInstituicao , totalmatriculaInstituicao , cidadeInstituicao , municipioInstituicao , cepInstituicao , ufInstituicao , bairroInstituicao , logInstituicao , numInstituicao , complementoInstituicao , codLoginInstituicao, codNivel, codFoneInstituicao )
      VALUES ('$nome', '$cod', '$adm', '$mod', '$porte', '$mat', '$cidade' , '$municipio' , '$cep' , '$uf', '$bairro' , '$rua' , '$numero' , '$complemento', '$codLoginInstituicao', '2', '$codLoginInstituicao' )";

     if($connect->query($sql)) {
         $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../login.php');    
    }else {
        echo $connect->error;
    }

?>
