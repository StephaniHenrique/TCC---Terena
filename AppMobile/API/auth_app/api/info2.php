<?php
$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
include_once 'config/cors.php';
include_once 'register.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn->query("UPDATE tbusers SET cepUsers = '" . $data->cepUsers . 
    "', cidadeUsers = '" . $data->cidadeUsers . 
    "', ufUsers = '" . $data->ufUsers .
    "', municipioUsers = '" . $data->municipioUsers . 
    "', bairroUsers = '" . $data->bairroUsers . 
    "', logUsers = '" . $data->logUsers . 
    "', numUsers = '" . $data->numUsers . 
    "', complementoUsers = '" . $data->complementoUsers . 
    "'  WHERE codUsers = (SELECT MAX(codUsers) FROM tbusers)  ");

    if ($sql) {
        exit(json_encode(array('status' => 'success')));
    } else {
        exit(json_encode(array('status' => 'error')));
    }
}
