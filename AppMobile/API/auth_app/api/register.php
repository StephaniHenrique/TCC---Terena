<?php
include_once 'config/dbh.php';
include_once 'config/cors.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"));

	$uname = $data->username;
    $pass = $data->password;

    $hashed = password_hash($pass, PASSWORD_DEFAULT);


    $sql = $conn->query("INSERT INTO users ( username, password) VALUES (  '$uname', '$hashed')");
    $sql = $conn->query("INSERT INTO tbescolaridade (serieEscolaridade) values ('') ");
    $FK = $conn->lastInsertId();
    $sql = $conn->query("INSERT INTO tbusers (iconUsers, codNivel, codEscolaridade, codInstituicao, iduser) VALUES ('user', '3', '$FK', '5' ,'$FK')"); 

    if ($sql) {
        http_response_code(201);
        echo json_encode(array('message' => 'User created'));
    } else {
        http_response_code(500);
        echo json_encode(array('message' => 'Internal Server error'));
    }
} else {
    http_response_code(404);
}






