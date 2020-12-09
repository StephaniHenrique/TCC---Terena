<?php
$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
include_once 'config/cors.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $data = array();
    $sql = $conn->query("SELECT * FROM tbusers WHERE codUsers = (SELECT MAX(codUsers) from tbusers)");
    while ($d = $sql->fetch_assoc()) {
        $data[] = $d;
    }

    exit(json_encode($data));
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn->query("UPDATE tbusers SET iconUsers = '" . $data->iconUsers .
        "' WHERE codUsers = (SELECT MAX(codUsers) FROM tbusers)  ");

    if ($sql) {
        exit(json_encode(array('status' => 'success')));
    } else {
        exit(json_encode(array('status' => 'error')));
    }
}

