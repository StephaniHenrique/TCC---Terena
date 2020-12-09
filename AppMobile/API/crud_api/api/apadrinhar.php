<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');

//Puxando todos os apadrinhados do usuario logado
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("SELECT *, REPLACE(nivelEscolaridade,' ','') as nivelEscolaridadeCor FROM tbapadrinhamento
      INNER JOIN tbusers ON tbapadrinhamento.codApadrinhado = tbusers.codUsers
      INNER JOIN tbescolaridade ON tbusers.codEscolaridade = tbescolaridade.codEscolaridade
      INNER JOIN tbinstituicao ON tbusers.codInstituicao = tbinstituicao.codInstituicao
      WHERE codPadrinho = $id");
        while ($d = $sql->fetch_assoc()) {
            $data[] = $d;
        }
    }

    exit(json_encode($data));
}

//Função apadrinhar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn->query("INSERT INTO tbapadrinhamento (codPadrinho, codApadrinhado)
     VALUES ('" . $data->codPadrinho . "','$data->codApadrinhado' )");

    if ($sql) {
        $data->codApadrinhamento = $conn->insert_id;
        exit(json_encode($data));
    } else {
        exit(json_encode(array('status' => 'error')));
    }
}

//Deletando apadrinhados do usuario logado
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("DELETE FROM tbapadrinhamento WHERE codApadrinhamento = '$id'");

        if ($sql) {
            exit(json_encode(array('status' => 'success')));
        } else {
            exit(json_encode(array('status' => 'error')));
        }
    }
}
