<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
$conn2 = new mysqli('localhost', 'root', '', 'bdsimetria');

//Puxando publicações do usuario logado
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("SELECT *, 
        concat(Upper(substr(LEFT(MONTHNAME(dataPublicacao), 3), 1,1)), lower(substr(LEFT(MONTHNAME(dataPublicacao), 3), 2,length(LEFT(MONTHNAME(dataPublicacao), 3)))))  as mes, 
        DAY(dataPublicacao) as dia, concat(Upper(substr(DAYNAME(dataPublicacao), 1,1)), lower(substr(DAYNAME(dataPublicacao), 2,length(DAYNAME(dataPublicacao)))))  as diaDaSemana, 
        HOUR(dataPublicacao) as hora, 
        minute(dataPublicacao) as minuto
        FROM tbpublicacao 
      INNER JOIN tbpublicacaousuario ON tbpublicacao.codPublicacao = tbpublicacaousuario.codPublicacao 
      INNER JOIN tbusers ON tbpublicacaousuario.codUsuario = tbusers.codUsers  
      INNER JOIN tbescolaridade ON tbusers.codEscolaridade = tbescolaridade.codEscolaridade
      INNER JOIN tbinstituicao ON tbusers.codInstituicao = tbinstituicao.codInstituicao
      WHERE codUsers = $id and status = 'ativo'");

        while ($d = $sql->fetch_assoc()) {
            $data[] = $d;
        }
    
    }
    exit(json_encode($data));
}
