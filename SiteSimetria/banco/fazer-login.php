<?php
    require("conexao.php");

    // ========================================= verficação para administradores ================================================
    if($_POST["email"] == "adm" && $_POST["senha"] == 123 && $connect != null){//administrador
        $confirm = 1;
        session_start();
            echo "<script>window.location = '../sessao-admin/index.php'</script>";
    }

    // ========================================= verficação para alunos e doadores ================================================
    else if (isset($_POST["email"]) && isset($_POST["senha"]) && $connect != null && $_POST["perfil"]== 1 ){ //aluno

        //select pra verificar se informações preenchidas existem no banco a parte de login
        $query = $connect->prepare("SELECT * FROM users WHERE username = ? AND password = ? ");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        
        //caso o usuario exista
        if($query->rowCount()){
            //array com todos os dados de login, pegando o indice 0
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            // variavel com id do aluno 
            $idAluno = $user['iduser'];
            

            // select para buscar informações na tbUser, onde estao todos os dados 
            $aluno = $connect->prepare("SELECT * FROM tbusers WHERE iduser = $idAluno ");
            $aluno->execute();
            //array com todos os dados da tabela tbUsers   
            $dados = $aluno->fetchAll(PDO::FETCH_ASSOC)[0];
            
            //
            $nivel = $dados['codNivel'];

            if($nivel == 1){
                //redirecionar o usuario 
                session_start();
                $_SESSION["aluno"] = array($dados["nomeUsers"], $dados["codUsers"]);
                    
                echo "<script>window.location = '../sessao-aluno/index.php'</script>";
            }
            else if($nivel == 3){
                 //redirecionar o usuario 
                 session_start();
                 $_SESSION["aluno"] = array($dados["nomeUsers"], $dados["codUsers"]);
                     
                 echo "<script>window.location = '../sessao-usuario/meuPerfil.php'</script>";
            }
            else{
                 //redirecionar o usuario 
                 session_start();
                
                     
                 echo "<script>window.location = '../login.php'</script>";
            }
                
        }else{
            echo "<script>window.location = '../login.php'</script>";
        }
    } //fim da verificação para alunos e doadores
    // ========================================= verficação para instituições ================================================
    else if (isset($_POST["email"]) && isset($_POST["senha"]) && $connect != null && $_POST["perfil"]== 2 ){ //aluno

        //select pra verificar se informações preenchidas existem no banco a parte de login
        $query = $connect->prepare("SELECT * FROM tblogininstituicao WHERE emailLoginInstituicao = ? AND senhaLoginInstituicao = ? ");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        
        //caso o usuario exista
        if($query->rowCount()){
            //array com todos os dados de login, pegando o indice 0
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            // variavel com id do aluno 
            $idInstituto = $user['codLoginInstituicao'];
            

            // select para buscar informações na tbUser, onde estao todos os dados 
            $instituto = $connect->prepare("SELECT * FROM tbinstituicao WHERE codLoginInstituicao = $idInstituto ");
            $instituto->execute();
            //array com todos os dados da tabela tbUsers   
            while($dados = $instituto->fetch(PDO::FETCH_ASSOC)){
         
                 
            //redirecionar o usuario ($dados["nomeUsers"], $dados["codUsers"]);
            session_start();
            $_SESSION["instituto"] = array($dados["nomeInstituicao"], $dados["codInstituicao"], $dados["admInstituicao"], $dados["coddaInstituicao"], $dados["modalidadeInstituicao"], $dados["portematriculaInstituicao"],
            $dados["totalmatriculaInstituicao"], $dados["cepInstituicao"], $dados["ufInstituicao"], $dados["complementoInstituicao"], $dados["cidadeInstituicao"], $dados["bairroInstituicao"], $dados["municipioInstituicao"],
            $dados["logInstituicao"], $dados["numInstituicao"], $dados["imgInstituicao"], $dados["codFoneInstituicao"], $dados["codLoginInstituicao"]);
            echo "<script>window.location = '../sessao-instituicao/index.php'</script>";

            }
        }
        else{
            //redirecionar o usuario 
            session_start();
           
                
            echo "<script>window.location = '../login.php'</script>";
       }
    }
    // ========================================= para caso não conseguir nenhum ================================================
    else{//se ele não conseguir
        echo "<script>window.location = '../login.php'</script>";
    }

?>


