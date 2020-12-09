<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');


//Puxando informações para  outros perfis (sem ser o do usuario logado)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("SELECT *, REPLACE(nivelEscolaridade,' ','') as nivelEscolaridade FROM tbinstituicao 
        INNER JOIN tbusers ON tbinstituicao.codInstituicao = tbusers.codInstituicao 
        INNER JOIN tbescolaridade ON tbescolaridade.codEscolaridade = tbusers.codEscolaridade
        INNER JOIN users ON tbusers.iduser = users.iduser WHERE codUsers = '$id'");
        $data = $sql->fetch_assoc();
    }

    exit(json_encode($data));
}
