<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../cliente_arquivos_css/MScadastro_cliente.css">
    <script src="../arquivos_jsCliente/MScadastro_cliente.js"></script>
    <title>Cadastre-se</title>
</head>

<body>
  <div class="body2">
  <div class="recebimento">
    <p>
      <h1>Seja bem vindo ao Mestre-Sala</h1>
      
    </p>
   
    
  </div>
  <div class="titulo">
      <div id="logo">
        <img src="../imagens/logo_com_fundo.png" alt="" srcset="">
        <p>
          
        </p>
      </div>
     
     
  </div>
  
  

  <div class="area_cards">
    
  <h1>você tem direito ao seu dia de mestre!</h1>
  
  <!--Cards com informações sobre as opções do usuário-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" id="cards">
        <img src="../imagens/animacao1.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Defina a barbearia de sua preferencia</h5>
          <p class="card-text">Aqui na mestre-sala você pode escolher ser cliente de qualquer barbearia cadastrada, uma ou mais, levando em conta a que mais faz parte de se gosto.</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="../imagens/animacao2.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Faça sua agenda sem sair de casa</h5>
          <p class="card-text">Você pode marcar qualquer serviço no conforto de sua casa ,e também sem precisar de ligação telefonica, basta escolher a barbearia, realizar o agendamento definindo a data e hora disponivel e pronto!</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="../imagens/animacao3.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cuide de sua beleza de forma fácil com a mestre-sala</h5>
          <p class="card-text">A mestre-sala está disponivel a qualquer hora, somente dependendo de ter acesso a internet, viu como é fácil ?</p>
        </div>
       
      </div>
    </div>
  </div>
  </div>
  <div class="card bg-dark text-white" id="card_foto_barberia">
    <img src="../imagens/place3.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h1>Escolha sua barberia</h1>
      <p class="card-text">Seja cliente da barberia que possa combinar com você</p>
      
    </div>
  </div>
  <div class="frases">
    
    <div class="card">
      <!--Nome -
      Endereco -
      Data/nascimento -
      Cep -
      Cidade -
      UF -
      Telefone -
      Email -
      foto
      Nome_de_usuario
      Senha_de_acesso-->
      <div class="card-body">
          <!-- Button trigger modal -->
          <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" id="comece">
            Começe agora
          </button>
  
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                  <button type="button" class="btn-close btn-close-white"  data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                  <!--CADASTRO DE CLIENTE-->
                  <form class="row g-5 needs-validation" method="post" action="../controladorCliente/MScadastro_cliente.php" novalidate>
                    <div class="col-md-4 position-relative">
                      <label for="validationTooltip01" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="validationTooltip01" name="nome" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu nome
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="validationTooltip01" class="form-label">Nome de usuário</label>
                      <input type="text" class="form-control"  name="nomeUsuario" id="nomeUsuario" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira um nome de usuário válido
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="validationTooltip01" class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" id="email" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu email
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip01" class="form-label">Telefone</label>
                      <input type="text" class="form-control"  name="telefone" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu numero de telefone
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip02" class="form-label">Data/nascimento</label>
                      <input type="date" class="form-control"  name="dataNascimento" id="dataNascimento" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira sua data de nascimento
                      </div>
                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltipUsername" class="form-label">Endereço</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" class="form-control" aria-describedby="validationTooltipUsernamePrepend" name="endereco" required>
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Insira seu endereço
                        </div>
                      </div>
                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip03" class="form-label">CEP</label>
                      <input type="text" class="form-control"  name="cep" id="cep" onchange="buscandoCEP()" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu CEP
                      </div>
                    </div>
                      <div class="col-md-20 position-relative">
                        <label for="validationTooltip03" class="form-label">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" required>
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Insira a cidade onde você reside
                        </div>

                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip04" class="form-label">UF</label>
                      <select class="form-select"  name="uf" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                      </select>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira a UF(estado) onde você reside
                      </div>
                    </div>
                    
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip03" class="form-label">Senha de acesso</label>
                      <input type="password" class="form-control" name="senhaDeAcesso" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira uma senha de acesso
                      </div>

                  </div>
                    

                    <div class="col-12">
                      <button class="btn btn-primary" type="submit" id="cadastrar" name="cadastrar">Cadastrar</button>
                    </div>
                  </form>
                    
                </div>
                
              </div>
            </div>
          </div>
        
      </div>
    </div>
    
     
    
    
       
  </div>

</div>
  
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
  </body>
  <?php require_once("../componentes/rodape.php") ?>

<script>
  

  //Verificando duplicidade de Nome de usuário
  $('#nomeUsuario').change(function(){
      var apelido = $(this).val();
      
      $.ajax({
        url : "../controladorCliente/duplicidadeNomeUsuario.php",
        type : 'POST',
        data : 'apelido=' + apelido,
        success : function(response){   //MELHORAR
         alert(response)
        },
        error : function(){
          alert("Erro ao verificar nome de usuário");
        }

      })
  })


  //Verificando duplicidade de Email
 $('#email').change(function(){
   var email = $(this).val();

   $.ajax({
     url: "../controladorCliente/duplicidadeEmail.php",
     type: 'POST',
     data: 'email=' + email,
     success : function(response){          //MELHORAR
       alert(response);
     },
     error: function(){
       alert("Email ao verificar email");
     }
   })
 })

  //Validando data de nascimento
  $("#dataNascimento").change(function(){
     var dn = $(this).val();

     var dataAtual = new Date();

     var dataNascimento = new Date(dn);   //VERIFICAR

     if(dataNascimento > dataAtual){
        alert("Data  de nascimento inválida")
     }
  })
  

  //Buscando CEP  do cliente
  
  

</script>
<script>
  
  (() => {
    'use strict'
    
   
    const forms = document.querySelectorAll('.needs-validation')
  
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
    
  })
  ()
 
  
  

    
       

</script>


</html>