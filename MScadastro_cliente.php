<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="arquivos_css/MScadastro_cliente.css">
    <title>Cadastre-se</title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    
}
body{
    background-image: url(imagens/inside-3315725_1920.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    height: 180vh;
    
}
.body2{
    margin-top: 400px;
    background: rgba(0, 0, 0, 0.514);
    width: 100%;
    margin-bottom: 400px;
    padding-bottom: 1px;
}
.recebimento{
    color: white;
    display: flex;
}
.recebimento h1{
    margin: 30px auto;
}
.titulo{
    padding: 200px;
    width: 70%;
    margin: auto;
   display: flex;
}
.titulo #logo{
    margin: auto;
}
.titulo #logo img{
    width: 400px;
    padding: 10px;
    border-radius: 50%;
}
.frases{
    display: flex;
    width: 100%;
    padding: 200px;
    color: white;
}
.frases h1{
    margin: auto;
}

.frases #comece{
    margin: auto;
    padding: 10px 50px;
    background: orange;
    border: none;
    font-size: larger;
    color: white;
}
.frases #comece:hover{
    color: white;
    background: orange;
    box-shadow: 0 0 50px orange;
}
.frases .card{
    margin: auto;
    background: transparent;
    border: none;
}

.area_cards{
    width: 100%;
    background: rgba(255, 166, 0, 0.301);
    padding: 3em;
    margin-bottom: 100px;
}
.area_cards #cards{
    background: transparent;
    border: none;
    color: white;
}
.area_cards h1{
    color: white;
}
#card_foto_barberia{
    border: none;
    width: 1000px;
    margin-bottom: 250px;
    display: flex;
    margin: auto;
    margin-bottom: 300px;
    padding-top: 110px;
}
footer .nav{
    background: black;
    padding: 20px;
    color: white;
}
.nav li img{
    border-radius: 50%;
}
.modal-body{
    background: black;

}

.modal-header{
    background: black;
    color: white;
}
.modal-header .btn-close{
    color: white;
}
.modal-header button{
    color: white;
}
.modal-body input{
    border: none;
    border-radius: 0;
    background: transparent;
    border-bottom: solid 2px orange;
    color: white;
}
.modal-body label{
    color: white;
}
.modal-body #cadastrar{
    margin-top: 15px;
    margin-left: 50px;
    background: darkred;
    color: white;
    padding: 10px 150px;
    border: none;
    font-size: larger;
    border-radius: 0;
}
.modal-body #cadastrar:hover{
    background: rgb(187, 3, 3);
}

@media only screen and (max-width: 600px) {
    .titulo{
        display: flex;
    }
    .titulo img{
        margin: auto;
        margin-left: -190px;
    }
    footer{
        display: flex;
    }
    footer .nav img{
        margin-left: 110px;
    }
    
  }
    
</style>
<body>
  <div class="body2">
  <div class="recebimento">
    <p>
      <h1>Seja bem vindo ao Mestre-Sala</h1>
      
    </p>
   
    
  </div>
  <div class="titulo">
      <div id="logo">
        <img src="imagens/logo_com_fundo.png" alt="" srcset="">
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
        <img src="imagens/animacao1.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Defina a barbearia de sua preferencia</h5>
          <p class="card-text">Aqui na mestre-sala você pode escolher ser cliente de qualquer barbearia cadastrada, uma ou mais, levando em conta a que mais faz parte de se gosto.</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="imagens/animacao2.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Faça sua agenda sem sair de casa</h5>
          <p class="card-text">Você pode marcar qualquer serviço no conforto de sua casa ,e também sem precisar de ligação telefonica, basta escolher a barbearia, realizar o agendamento definindo a data e hora disponivel e pronto!</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="imagens/animacao3.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cuide de sua beleza de forma fácil com a mestre-sala</h5>
          <p class="card-text">A mestre-sala está disponivel a qualquer hora, somente dependendo de ter acesso a internet, viu como é fácil ?</p>
        </div>
       
      </div>
    </div>
  </div>
  </div>
  <div class="card bg-dark text-white" id="card_foto_barberia">
    <img src="imagens/place3.jpg" class="card-img" alt="...">
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
                  <form class="row g-5 needs-validation" method="post" action="controladores/MScadastro_cliente.php" novalidate>
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
                      <input type="text" class="form-control" id="validationTooltip01" name="nomeUsuario" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira um nome de usuário válido
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="validationTooltip01" class="form-label">Email</label>
                      <input type="text" class="form-control" id="validationTooltip01" name="email" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu email
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip01" class="form-label">Telefone</label>
                      <input type="text" class="form-control" id="validationTooltip01" name="telefone" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu numero de telefone
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip02" class="form-label">Data/nascimento</label>
                      <input type="date" class="form-control" id="validationTooltip02" name="dataNascimento" required>
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
                        
                        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="endereco" required>
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
                      <input type="text" class="form-control" id="validationTooltip03" name="cep" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu CEP
                      </div>
                    </div>
                      <div class="col-md-20 position-relative">
                        <label for="validationTooltip03" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="validationTooltip03" name="cidade" required>
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Insira a cidade onde você reside
                        </div>

                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip04" class="form-label">UF</label>
                      <select class="form-select" id="validationTooltip04" name="uf" required>
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
                      <input type="password" class="form-control" id="validationTooltip03" name="senhaDeAcesso" required>
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
  
    <script src="/arquivos_js/MScadastro_cliente.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
  </body>
<footer>
  <ul class="nav">
    <li class="nav-item">
      <img src="imagens/logo_fundo_transparente.png" alt="" srcset="">
    </li>
    <li class="nav-item">
      <p>© Copyright 2022 Luiz Antonio O.C.Teodoro <p>
      <p>Desenvolvedor: Luiz Teodoro</p>
    </li>
    
  </ul>
</footer>
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
  })()
</script>
</html>