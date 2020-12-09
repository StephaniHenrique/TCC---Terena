<?php
require_once 'headers.php';

$conn = new mysqli('localhost', 'root', '', 'bdsimetria');
$conn3 = new mysqli('localhost', 'root', '', 'bdsimetria');

$banco = "bdsimetria";
$usuario = "root";
$senha = "";
$conn2 = new PDO("mysql:host=localhost;dbname=$banco",$usuario,$senha);

//Puxando detalhes de publicação com id especifico
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['id'])){
      $id = $conn->real_escape_string($_GET['id']);  
      $sql = $conn->query("SELECT *, REPLACE(nivelEscolaridade,' ','') as nivelEscolaridadeCor FROM tbpublicacao 
      INNER JOIN tbpublicacaousuario ON tbpublicacao.codPublicacao = tbpublicacaousuario.codPublicacao 
      INNER JOIN tbusers ON tbpublicacaousuario.codUsuario = tbusers.codUsers  
      INNER JOIN tbescolaridade ON tbusers.codEscolaridade = tbescolaridade.codEscolaridade
      INNER JOIN tbinstituicao ON tbusers.codInstituicao = tbinstituicao.codInstituicao
      WHERE codPublicacaoUsuario = $id");
      $data = $sql->fetch_assoc();
    } 

    exit(json_encode($data));
}


//Para postar publicação
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn2->query("INSERT INTO tbpublicacao (tituloPublicacao, descricaoPublicacao, fotoPublicacao, status)
     VALUES ('".$data->tituloPublicacao."','".$data->descricaoPublicacao."','".$data->tituloPublicacao."', 'ativo' )");
     //Capturando último id inserido, isto é, id da ultima publicação
     $FK = $conn2->lastInsertId();

     $sql2 = $conn->query("INSERT INTO tbpublicacaousuario (codPublicacao, codUsuario) VALUES ( '$FK', '".$data->codUsers."' )");

    if($sql) {
        $data->codpublicacaoUsuario = $conn->insert_id;
        exit(json_encode($data));
    } else {
        exit(json_encode(array('status' => 'error')));
    }
   
}

//Update publicação
if ($_SERVER['REQUEST_METHOD'] === 'PUT'){
   if(isset($_GET['id'])){
       $id = $conn->real_escape_string($_GET['id']);
       $data = json_decode(file_get_contents("php://input"));
       $sql = $conn->query("UPDATE tbpublicacao SET 
       tituloPublicacao = '".$data->tituloPublicacao."', 
       descricaoPublicacao = '".$data->descricaoPublicacao."', 
       dataPublicacao = '".$data->dataPublicacao."', 
       fotoPublicacao = '".$data->fotoPublicacao."' 
       WHERE codPublicacao = '$id'");

       if($sql) {
           exit(json_encode(array('status' => 'success')));
       } else {
           exit(json_encode(array('status' => 'error')));
       }
   }
}

//Excluir publicações

if ($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    if(isset($_GET['id'])){
        $id = $conn->real_escape_string($_GET['id']);
        $sql = $conn->query("DELETE FROM tbpublicacaousuario WHERE codPublicacaoUsuario = '$id'");
        $sql2 = $conn3->query("DELETE FROM tbpublicacao WHERE codPublicacao ='$id' ");

        if($sql) {
            exit(json_encode(array('status' => 'success')));
        } else {
            exit(json_encode(array('status' => 'error')));
        }
    }
}