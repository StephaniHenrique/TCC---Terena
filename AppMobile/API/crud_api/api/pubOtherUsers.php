<?php

require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
$conn3 = new mysqli('localhost', 'root', '', 'bdsimetria');

$banco = "bdsimetria";
$usuario = "root";
$senha = "";
$conn2 = new PDO("mysql:host=localhost;dbname=$banco",$usuario,$senha);

//Puxando  as publicações de outros perfis (sem ser o do usuario logado)
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['id'])){
      $id = $conn->real_escape_string($_GET['id']);  
      $sql = $conn->query("SELECT *, REPLACE(nivelEscolaridade,' ','') as nivelEscolaridadeCor FROM tbpublicacao 
      INNER JOIN tbpublicacaousuario ON tbpublicacao.codPublicacao = tbpublicacaousuario.codPublicacao 
      INNER JOIN tbusers ON tbpublicacaousuario.codUsuario = tbusers.codUsers  
      INNER JOIN tbescolaridade ON tbusers.codEscolaridade = tbescolaridade.codEscolaridade
      INNER JOIN tbinstituicao ON tbusers.codInstituicao = tbinstituicao.codInstituicao
      WHERE codUsers != $id ORDER BY tbpublicacao.dataPublicacao");
      while ($d = $sql->fetch_assoc()) {
        $data[] = $d;
    }
}
    exit(json_encode($data));
}