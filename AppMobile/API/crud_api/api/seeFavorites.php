<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
$conn2 = new mysqli('localhost', 'root', '', 'bdsimetria');

//Buscando os favoritados do usuario logado
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("SELECT *, REPLACE(nivelEscolaridade,' ','') as nivelEscolaridadeCor FROM tbfavoritos
        INNER JOIN tbpublicacao ON tbpublicacao.codPublicacao = tbfavoritos.codPublicacao 
      INNER JOIN tbpublicacaousuario ON tbpublicacao.codPublicacao = tbpublicacaousuario.codPublicacao 
      INNER JOIN tbusers ON tbpublicacaousuario.codUsuario = tbusers.codUsers  
      INNER JOIN tbescolaridade ON tbusers.codEscolaridade = tbescolaridade.codEscolaridade
      INNER JOIN tbinstituicao ON tbusers.codInstituicao = tbinstituicao.codInstituicao
      WHERE tbfavoritos.codUsers = $id and status = 'ativo'");

        while ($d = $sql->fetch_assoc()) {
            $data[] = $d;
        }
    
    }
    exit(json_encode($data));
}
