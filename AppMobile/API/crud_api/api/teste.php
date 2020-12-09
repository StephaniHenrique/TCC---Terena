<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
$conn2 = new mysqli('localhost', 'root', '', 'bdsimetria');

//Puxando alunos que o usuario auxiliou/realizou doação
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("SELECT *, iconUsers, REPLACE(nivelEscolaridade,' ','') as nivelEscolaridade from tbdoacao 
        INNER JOIN tbpublicacao ON tbdoacao.codPublicacao = tbpublicacao.codPublicacao 
        INNER JOIN tbpublicacaousuario on tbpublicacaousuario.codPublicacao = tbpublicacao.codPublicacao
        INNER JOIN tbusers  ON tbpublicacaousuario.codUsuario = tbusers.codUsers
        INNER JOIN tbescolaridade ON tbescolaridade.codEscolaridade = tbusers.codEscolaridade
        WHERE tbdoacao.codUsers = $id");
    
        while ($d = $sql->fetch_assoc()) {
            $data[] = $d;
            
        }
    
    }

    exit(json_encode($data));
}
