
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css responsavel por menu -->
    <link rel="stylesheet" href="./css/universal.css">
    <link rel="icon" type="imagem/png" href="./assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/novoCadInstituicao.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">

</head>
<body>
    <!--===================== Header ======================-->
    <header class="s-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">
                <img src="./assets/img/logo.png" alt="">
                Simetria
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item  border-item">
                        <a href="#inicio" class="nav__link">inicio</a>
                    </li>
                    <li class="nav__item  border-item">
                        <a href="#app" class="nav__link">aplicativo</a>
                    </li>
                    <li class="nav__item border-item">
                        <a href="#sobre" class="nav__link">sobre</a>
                    </li>
                    <li class="nav__item ">
                        <a href="login.php" class=" btn btn-entrar">entrar</a>
                    </li>
                    <li class="nav__item ">
                        <a href="escolha-cad.php" class="btn btn-cadastrar">cadastrar</a>
                    </li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu-alt-left'></i>
            </div>
        </nav>
    </header>
    <!--===================== Inicio do conteudo ======================-->
    <main>
        <!--===================== topo e titulo ======================-->
        <div class="topo">
            <a href="escolhaCadastro.html" class="back">
                <img src="./img/back.png" alt="">
            </a>
            <p >CADASTRO INSTITUIÇÃO</p>
        </div>
        <div class="content">
          <div class="multiStep">
            <div class="steps">
              <div class="stepss">
                <div>
                  <p>1</p>
                </div>
                <div>
                  <p>2</p>
                </div>
                <div>
                  <p>3</p>
                </div>
              </div>
              <div class="progress">
                <div class="progressFunc">
                <div class="progressFunc2"></div>
                </div>
              </div>
            </div>
          </div>
           <!--===================== Inicio do formulario ======================-->
          <form id="formAcess" >
          <h3>Dados de acesso</h3>

          <div class="wrapper">
            <input type="text" id="email" placeholder=" " required>
            <label for="" class="lbl">Email</label>
            <div class="msgzinha" id="msgEmail">
              <p><i class="fas fa-exclamation-circle"></i> Digite um Email válido</p>
            </div>
          </div>


          <div class="twoFields">
              <div class="wrapper">
                <input type="password" id="senha" placeholder=" " required>
                <label for="" class="lblSenha">Senha</label>
                <div class="msgzinha" id="msgSenha">
                  <p><i class="fas fa-exclamation-circle"></i> Senhas não coincidem</p>
                </div>
              </div>

              <div class="wrapper">
                <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder=" " required>
                <label for="" class="lblConf">Confirmar Senha</label>
                <div class="msgzinha" id="msgConf">
                  <p><i class="fas fa-exclamation-circle"></i> Senhas não coincidem</p>
                </div>
            </div>
          </div>
     
              <div class="btnCad">
                <button class="btn">Voltar</button>
                <button type="submit" name="cad-log" form="form1" class="btn cad" id="submit">Próximo</button>
                
              </div>

            </form>

           <!--===================== Inicio do formulario de Contato ======================-->
          <form id="formEscolaridade">
            <h3>Dados para Contato</h3>
            <div class="twoFields">
            <div class="wrapper">
                    <input type="text" id="telInstituicao" placeholder=" ">
                    <label for="" class="lbl">Numero de telefone da instituição</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                </div>

                  <div class="wrapper">
                    <input type="text" id="celInstituicao" placeholder=" ">
                    <label for="" class="lbl">Numero de celular da instituição</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                  </div>
                  </div>
                

              <div class="btnCad">
                <button class="btn volta">Voltar</button>
                <button type="submit" name="cad-tel" id="submitContact" class="btn cadEscolaridade">Próximo</button>
              </div>
          </form>

<!--===================== Inicio do formulario Localização Instituicao  ======================-->
          <form id="formInfoPessoais" enctype="multipart/form-data" action="banco/terceiro-cadastro-instituicao.php">
          <h3>Identificação da Unidade</h3>
            <div class="wrapper">
                    <div class="flexIconCad">
                      <div class="iconCad">
                        <img src="./assets/img/add-image.png" class="personagem" alt=""> 
                      </div>
                      <p>Insira uma imagem (emblema, logo, foto) da instituição</p>     
                    </div>
                    <p><input type="file" id="img" name="img" accept="image/*" style="width: 50%; height: 100%; border: solid 1px #2222223a; border-radius: 5px; padding: 11px; background-color: var(--color-ligth); box-sizing: border-box;"></p>
                  </div>
                  <br><br>

                  <div class="wrapper">
                    <input type="text" name="nome" id="nome" placeholder=" " required>
                    <label for="" class="lblConf">Nome da Instituição</label>
                    <!-- <div class="msgzinha" id="msgConf">
                      <p><i class="fas fa-exclamation-circle"></i> Senhas não coincidem</p>
                    </div> -->
                </div>


                  <div class="wrapper">
                  <input type="number" name="codInst" id="codInst" placeholder=" ">
                    <label for="codInst" class="lbl">Código da Instituição</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                  </div>

                  <div class="wrapper">
                            <select name="depAdm" id="depAdm" class="drop" required>
                            <option value=""  disabled selected >Dependencia Administrativa</option>
                                <option value="Estadual">Estadual</option>
                                <option value="Municipal">Municipal</option>
                                <option value="Federal">Federal</option>
                                <option value="Privada">Privada</option>
                                <option value="Técnica">Técnica</option>
                            </select>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                </div>

                <div class="wrapper">
                 <select name="modEnsino" id="modEnsino" class="drop" required>
                    <option value=""  disabled selected >Modalidade de Ensino</option>
                    <option value="estadual">Publica</option>
                    <option value="municipal">Privada</option>
                    <option value="municipal">Técnica</option>
                 </select>
                </div>
               
                <div class="twoFields">
                  <div class="wrapper">
                    <input type="number" name="porteMatricula" id="porteMatricula" placeholder=" ">
                    <label for="porteMatricula" class="lbl">Porte de Matrículas</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                  </div>

                  <div class="wrapper">
                    <input type="number" name="numMatriculados" id="numMatriculados" placeholder=" ">
                    <label for="numMatriculados" class="lbl">Número de Matrículados</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                </div>
                </div>
         <h3>Localização</h3>


        <div class="wrapper">
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" />
               <label for="" class="lbl">CEP</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                </div>
                 
                <div class="twoFields">
                  <div class="wrapper">
                    <input name="rua" type="text" id="rua" size="60" />
                    <label for="" class="lbl">Logradouro</label>
                  </div>
                  <div class="wrapper">
                    <input name="bairro" type="text" id="bairro" size="40" />
                    <label for="" class="lbl">Bairro</label>
                  </div>
                </div>

                <div class="twoFields">
                  <div class="wrapper">
                    <input name="cidade" type="text" id="cidade" size="40" />
                    <label for="" class="lbl">Cidade</label>
                  </div>
                  <div class="wrapper">
                    <input name="uf" type="text" id="uf" size="2" />
                    <label for="" class="lbl">UF</label>
                    </div>
                </div>


                <div class="wrapper">
                    <input type="text" name="municipio" id="municipio" placeholder=" ">
                    <label for="" class="lbl">Municipio</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                </div>

                <div class="twoFields">
                  <div class="wrapper">
                    <input type="number" name="num" id="num" placeholder=" ">
                    <label for="" class="lbl">Número</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                  </div>

                  <div class="wrapper">
                    <input type="text" name="comp" id="comp" placeholder=" ">
                    <label for="" class="lbl">Complemento</label>
                    <!-- <div class="msgzinha">
                      <p><i class="fas fa-exclamation-circle"></i></p>
                    </div> -->
                </div>

              </div>
              <div class="btnCad"> 
                <button class="btn volta2">Voltar</button>
                <button name="btn-cadastrar" id="submitInfo" class="btn">Cadastrar</button>
                
              </div>
            </form>

        </div>
    </main>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="jquery-3.5.1.min.js"></script>

<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

<script>
    function iniciaModal (modalID) {
        const modal = document.getElementById(modalID);
        if(modal){
            modal.classList.add('mostrar');
            modal.addEventListener('click', (e) => {

                if(e.target.id == modalID || e.target.className == 'fechar-modal'|| e.target.className == 'btnIcon') {
                modal.classList.remove('mostrar');

                }

            });
        }
    }
    
    const personagem = document.querySelector('.personagem');
    personagem.addEventListener('click', function() {

        iniciaModal('modal-personagens');

    });

</script>

<script>
    $(document).ready(function(){

      $('#submit').on('click', function(e){
        e.preventDefault();
        var e_senha = $('#senha').val();
        var e_email = $('#email').val();

        $.ajax({
          url: 'banco/primeiro-cadastro-instituicao.php',
          type: 'POST',
          data:{email: e_email, senha: e_senha},
          success:function(data){

          }, error:function(data){

          }
        });
      });

      $('#submitContact').on('click', function(e){
        e.preventDefault();
        var e_telefone = $('#telInstituicao').val();
        var e_celular = $('#celInstituicao').val();

        $.ajax({
          url: 'banco/segundo-cadastro-instituicao.php',
          type: 'POST',
          data:{telefone: e_telefone, celular: e_celular},
          success:function(data){

          }, error:function(data){

          }
        });
      });

    });

</script>

<script>


</script>


<script>

    


function validaCampos() {
    const email = document.getElementById("email");
    const label = document.querySelector(".lbl");
    const mensagem = document.querySelector("#msgEmail");
    const labelSenha = document.querySelector(".lblSenha");
    const labelConfSenha = document.querySelector(".lblConf");
    const msgConf = document.querySelector("#msgConf");
    const mensagemS = document.querySelector("#msgSenha");
    const senha = document.querySelector("#senha");
    const confirmaSenha = document.querySelector("#confirmaSenha");
    const cadas = document.querySelector(".cad");

    let vEmail = false;
    let vSenha = false;

    function validaNome() {
      if (email.value.length >= 3 && email.value.length < 99 && email.value.indexOf('@') >= 0 && email.value.indexOf('.') >= 0) {
        vEmail = true;
        email.classList.remove("inputInvalido");
        label.classList.remove("labelInvalida");
        mensagem.classList.remove("ativo");
        if (email.value.indexOf('  ') >= 0) {
          vEmail = false;
          email.classList.add("inputInvalido");
          label.classList.add("labelInvalida");
          mensagem.classList.add("ativo");
        }
      } else {
        vEmail = false;
        email.classList.add("inputInvalido");
        label.classList.add("labelInvalida");
        mensagem.classList.add("ativo");
      }
    }

    function validaSenha() {
      if (senha.value === confirmaSenha.value ) {
        labelSenha.classList.remove("labelInvalida");
        senha.classList.remove("inputInvalido");
        mensagemS.classList.remove("ativo");
        confirmaSenha.classList.remove("inputInvalido");
        labelConfSenha.classList.remove("labelInvalida");
        msgConf.classList.remove("ativo");
        vSenha = true;
      } else {
        labelSenha.classList.add("labelInvalida");
        senha.classList.add("inputInvalido");
        mensagemS.classList.add("ativo");
        confirmaSenha.classList.add("inputInvalido");
        labelConfSenha.classList.add("labelInvalida");
        msgConf.classList.add("ativo");
        vSenha = false;
      }
    }

  confirmaSenha.addEventListener("keyup", () => {
    validaSenha();
  });

  email.addEventListener("keyup", () => {
    validaNome();
  });

  
  cadas.addEventListener("click", () => {
    event.preventDefault(); 
    if(vEmail && vSenha){ 
      acess();
    } else {
      alert("Preencha as informações de forma correta para prosseguir o cadastro.");
    }
  });


} validaCampos();


  const voltar = document.querySelector(".volta");
  const voltar2 = document.querySelector(".volta2");
  const acesso = document.getElementById("formAcess");
  const progress = document.querySelector(".progressFunc");
  const progress2 = document.querySelector(".progressFunc2");
  const escolaridade = document.getElementById("formEscolaridade");
  const cadastroEscolaridade = document.querySelector(".cadEscolaridade");
  const info = document.getElementById("formInfoPessoais");

  function acess(){
    event.preventDefault(); 
    acesso.classList.add("inativo");
    escolaridade.classList.add("ativo");
    progress.classList.add("ativo");
    progress.classList.add("progressFunc");
    progress.classList.remove("inativo");
  }

  function volta(){
    event.preventDefault();
    escolaridade.classList.remove("ativo");
    acesso.classList.remove("inativo");
    acesso.classList.add("ativo");
    progress.classList.add("progressFunc4");
    progress.classList.remove("progressFunc");
  }

  function volta2(){
    event.preventDefault();
    info.classList.remove("ativo");
    escolaridade.classList.remove("inativo");
    escolaridade.classList.add("ativo");
    progress.classList.remove("progressFunc2");
    progress.classList.add("progressFunc3");
  }

  cadastroEscolaridade.addEventListener("click", () => {
    event.preventDefault();
    info.classList.remove("inativo");
    info.classList.add("ativo");
    escolaridade.classList.remove("ativo");
    progress.classList.add("progressFunc2");
    progress.classList.remove("progressFunc3");
    progress.classList.remove("progressFunc4");
    progress.classList.remove("progressFunc");
  })

  voltar.addEventListener("click", () => {
    volta();
  })

  voltar2.addEventListener("click", () => {
    volta2();
  });


 </script>

