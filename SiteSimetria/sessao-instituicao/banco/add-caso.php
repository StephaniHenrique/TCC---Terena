<?php 
    
    include_once '../banco/conexao.php';

    //iniciar sessão e verificar se existe
    session_start();
    //se existir entra
    if(isset($_SESSION["instituto"]) && is_array($_SESSION["instituto"])){
        $id = $_SESSION["instituto"][1];
    }
    //se não, volta para o login
    else{
        echo "<script>window.location = '../login.php'</script>"; 
    }
    
    $titulo = $_POST['titulo'];
    $desc = $_POST['descricao'];
    $img = $_FILES['foto'];

    if($img !== null | $titulo !== null && $desc !== null){
        //verificando o modelo do arquivo
        preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);
        

        //renomeando 
        if ($ext == true){
            $nome_img = md5(uniqid(time())) . "." . $ext[1];
            $caminho_img = "../img/img-casos/" . $nome_img;

            //mover arquivo para a pasta
            move_uploaded_file($img["tmp_name"], $caminho_img);
        } 

        include_once '../banco/conexao.php';
        
        $dados = "INSERT INTO tbpublicacao (tituloPublicacao, descricaoPublicacao, fotoPublicacao) 
        VALUES (:tituloPublicacao, :descricaoPublicacao, :fotoPublicacao )";
        $inserir = $connect->prepare($dados);
        $inserir->execute(['tituloPublicacao' => $titulo, 'descricaoPublicacao' => $desc, 'fotoPublicacao' => $nome_img ]);

        //buscando infos da publicação
        $publi_dados = $connect->prepare("SELECT * FROM tbpublicacao WHERE fotoPublicacao = '$nome_img' ");
        $publi_dados->execute();

        while($dados = $publi_dados->fetch(PDO::FETCH_ASSOC)){
            
        //separando informações necessarias
        $codPubli = $dados['codPublicacao'];

            if($codPubli !== null){
                $sql = "INSERT INTO tbpublicacaoinstitu ( codPublicacao, codInstituicao) 
                VALUES (:codPublicacao, :codInstituicao )";
                $inserir = $connect->prepare($sql);
                $inserir->execute(['codPublicacao' => $codPubli, 'codInstituicao' => $id]);

                echo "<script>window.location = '../index.php'</script>"; 

            }
        }
    }



?>