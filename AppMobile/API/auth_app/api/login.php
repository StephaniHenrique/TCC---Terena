<?php
$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
include_once '../vendor/autoload.php';
$conn2 = new mysqli('localhost', 'root', '', 'bdsimetria');

use \Firebase\JWT\JWT;

include_once 'config/cors.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"));

    $uname = $data->username;
    $pass = $data->password;

    $sql = $conn->query("SELECT * FROM users WHERE username = '$uname'");

    if ($sql->num_rows > 0) {
        $user = $sql->fetch_assoc();
        if (password_verify($pass, $user['password'])) {
            $key = "YOUR_SECRET_KEY";  // JWT KEY
            $payload = array(
                $user['iduser']
            );

            $hashed = password_hash($pass, PASSWORD_DEFAULT);

            $sql2 = $conn2->query("SELECT * FROM tbinstituicao 
            INNER JOIN tbusers ON tbinstituicao.codInstituicao = tbusers.codInstituicao 
            INNER JOIN tbescolaridade ON tbescolaridade.codEscolaridade = tbusers.codEscolaridade
            INNER JOIN users ON tbusers.iduser = users.iduser WHERE username = '$uname'  ");
            $dataUsers = $sql2->fetch_assoc();

            $token = JWT::encode($payload, $key);
            http_response_code(200);
            echo json_encode(array('token' => $token, 'dataUsers' => $dataUsers));
            
        } else {
            http_response_code(400);
            echo json_encode(array('message' => 'Login Failed!'));
        }
    } else {
        http_response_code(400);
        echo json_encode(array('message' => 'Login Failed!'));
    }
}
