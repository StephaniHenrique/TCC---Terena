<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');

//Favoritando
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
     
        $data = json_decode(file_get_contents("php://input"));
        $sql = $conn->query("INSERT INTO tbfavoritos (codUsers, codPublicacao)
     VALUES ('" . $data->codUsers . "','$data->codPublicacao' )");

    if ($sql) {
        $data->codFavoritos = $conn->insert_id;
        exit(json_encode($data));
    } else {
        exit(json_encode(array('status' => 'error')));
    }
}

//Desfavoritar
if ($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    if(isset($_GET['id'])){
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("DELETE FROM tbfavoritos WHERE codPublicacao = '$id'");
       
        if($sql) {
            exit(json_encode(array('status' => 'success')));
        } else {
            exit(json_encode(array('status' => 'error')));
        }
    }
}
