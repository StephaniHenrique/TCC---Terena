<?php
//conexão com o banco
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "bdsimetria";

//o banco vai tentar fazer a conexão
try{
    $connect = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}//caso de erro, ele exibe essa mensagem na tela, assim evitando que o usuario veja os erros
catch(PDOException $erro){
    echo "Ocorreu um erro de conexão: {$erro->getMessage()}";
    $connect = null;
}

