<?php
//sessão
session_start();
//conexão
require_once 'conexao.php';

// se o btn atualizar existir (for clicado)
if(isset($_POST['btn-deletar'])):
    $codInstituicao = mysqli_escape_string($connect, $_POST['codInstituicao']);

    //deletando no banco de dados
    $sql = "DELETE FROM tbinstituicao WHERE codInstituicao='$codInstituicao'";

    //se o banco estiver devidamente linkado e funcionando aparecera isso
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../userEscola.php?');
    //se o banco não estiver devidamente linkado e funcionando aparecera isso
    else:
        $_SESSION['mensagem'] = "Erro ao Deletar";
        header('Location: ../userEscola.php?');
    endif;
endif;