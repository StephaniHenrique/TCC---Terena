<?php
$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
include_once 'config/cors.php';
include_once 'register.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn->query("UPDATE tbescolaridade SET serieEscolaridade = '" . $data->serieEscolaridade . 
    "', anofimEscolaridade = '" . $data->anofimEscolaridade . 
    "', instituicaoEscolaridade = '" . $data->instituicaoEscolaridade . 
    "', codInstituicaoEscolaridade = '" . $data->codInstituicaoEscolaridade . 
    "', nivelEscolaridade = '" . $data->nivelEscolaridade . 
    "', identificarEscolaridade = '" . $data->identificarEscolaridade . 
    "'  WHERE codEscolaridade = (SELECT MAX(codEscolaridade) FROM tbescolaridade)  ");

    $sql = $conn->query("UPDATE tbusers SET codInstituicao = (SELECT codInstituicao FROM tbinstituicao WHERE coddaInstituicao = '". $data->codInstituicaoEscolaridade."') where codUsers = (SELECT MAX(codUsers) FROM tbUsers)");

    $sql = $conn->query("UPDATE tbusers SET codNivel = '1' WHERE codUsers = (SELECT MAX(codUsers) FROM tbusers) ");


    if ($sql) {
        exit(json_encode(array('status' => 'success')));
    } else {
        exit(json_encode(array('status' => 'error')));
    }
}