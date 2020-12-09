<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
$conn2 = new mysqli('localhost', 'root', '', 'bdsimetria');

//Puxando publicações que já foram resolvidas
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("SELECT *, 
        concat(Upper(substr(LEFT(MONTHNAME(dataPublicacao), 3), 1,1)), lower(substr(LEFT(MONTHNAME(dataPublicacao), 3), 2,length(LEFT(MONTHNAME(dataPublicacao), 3)))))  as mes, 
        DAY(dataPublicacao) as dia, concat(Upper(substr(DAYNAME(dataPublicacao), 1,1)), lower(substr(DAYNAME(dataPublicacao), 2,length(DAYNAME(dataPublicacao)))))  as diaDaSemana, 
        HOUR(dataPublicacao) as hora, minute(dataPublicacao) as minuto from tbdoacao 
        INNER JOIN tbpublicacao ON tbdoacao.codPublicacao = tbpublicacao.codPublicacao 
        INNER JOIN tbpublicacaousuario on tbpublicacaousuario.codPublicacao = tbpublicacao.codPublicacao
        INNER JOIN tbusers  ON tbdoacao.codUsers = tbusers.codUsers
        WHERE codUsuario = $id");
    
        while ($d = $sql->fetch_assoc()) {
            $data[] = $d;
            
        }
    
    }

    exit(json_encode($data));
}
