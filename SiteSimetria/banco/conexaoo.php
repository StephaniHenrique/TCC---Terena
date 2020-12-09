<?php
//conexão com o banco
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "bdsimetria";

$connect = mysqli_connect($servername, $username, $password, $db_name);

// caso tenha algum erro ele ia imprimi-lo na pag
if(mysqli_connect_error()):
    echo "Erro na conexão : ".mysqli_connect_error(); 
endif;