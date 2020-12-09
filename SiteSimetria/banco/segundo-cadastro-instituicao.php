<?php
    //conexão

    require("conexao.php");
    

    $tel = $_POST['telefone'];
    $cel = $_POST['celular'];


    $sqlInsert = $conexao->prepare("INSERT INTO tbfoneinstituicao 
    (NumeroFoneInstituicao, CelularFoneInstituicao) VALUES ('$tel', '$cel')");

    $sqlInsert->execute();

        if($sqlInsert == true){
            echo 'Cadastrado com sucesso';
        } else {
            echo 'Houve um erro ao cadastrar';
        }


?>