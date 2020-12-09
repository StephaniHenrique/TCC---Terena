<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
$conn2 = new mysqli('localhost', 'root', '', 'bdsimetria');

//Realizando doação
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn->query("INSERT INTO tbdoacao (rastrearDoacao, codUsers, codPublicacao)
     VALUES ('".$data->rastrearDoacao."','".$data->codUsers."','".$data->codPublicacao."' )");
    
    $sql2 =  $conn2->query("UPDATE tbpublicacao SET status = 'inativo' WHERE codPublicacao = '".$data->codPublicacao."'");
    

  
    if($sql) {
        $data->codDoacao = $conn->insert_id;
        exit(json_encode($data));
    } else {
        exit(json_encode(array('status' => 'error')));
    }
   
}