<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');

//Puxando pendencias
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['id'])){
      $id = $conn->real_escape_string($_GET['id']);  
      $sql = $conn->query("SELECT *, REPLACE(nivelEscolaridade,' ','') as nivelEscolaridadeCor FROM tbpendencias
      INNER JOIN tbusers ON tbpendencias.codAluno = tbusers.codUsers
      INNER JOIN tbescolaridade ON tbusers.codEscolaridade = tbescolaridade.codEscolaridade
      WHERE tbpendencias.codDoador = $id");
      while ($d = $sql->fetch_assoc()) {
        $data[] = $d;
    }
    } 

    exit(json_encode($data));
}
