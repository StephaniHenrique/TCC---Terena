<?php 
#<!-- This is protected route. Accessed by only loggged in users -->
$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
include_once '../vendor/autoload.php';

use \Firebase\JWT\JWT;

include_once 'config/cors.php';

// get request headers
$authHeader = getallheaders();
if (isset($authHeader['Authorization']) ) {
    $token = $authHeader['Authorization'];
    $token = explode(" ", $token)[1];

    try {
        $key = "YOUR_SECRET_KEY";
        $decoded = JWT::decode($token, $key, array('HS256'));
        $fk = $decoded;
        // Do some actions if token decoded successfully.

        // But for this demo let return decoded data
        http_response_code(200);
        echo json_encode($fk);
        

        $data = array();
        $sql=$conn->query("SELECT * FROM tbusers WHERE codUsers = '".$fk."' ");
        while ($d = $sql->fetch_assoc()) {
            $data[] = $d;
        }
        exit( json_encode($data));

    } catch (Exception $e) {
        http_response_code(401);
        echo json_encode(array('message' => 'Please authenticate'));
    }
} else {
    http_response_code(401);
    echo json_encode(array('message' => 'Please authenticate'));
}

