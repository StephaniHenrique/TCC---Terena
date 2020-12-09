<?php
    //conexão

    require("conexao.php");
    

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlInsert = $conexao->prepare("INSERT INTO tblogininstituicao 
    (emailLoginInstituicao, senhaLoginInstituicao) VALUES ('$email', '$senha')");

    $sqlInsert->execute();

        if($sqlInsert == true){
            echo 'Cadastrado com sucesso';
        } else {
            echo 'Houve um erro ao cadastrar';
        }


?>