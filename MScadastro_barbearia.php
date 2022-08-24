<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="arquivos_css/MScadastro_barbearia.css">
    <title>Cadastre sua barberia</title>
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
        <img src="imagens/logo_com_fundo.png" alt="" srcset="">
        <p>
          
        </p>
      </div>
     
     
  </div>
  

  <div class="area_cards">
  <h1>Divulgue seu serviço com o Mestre-Sala </h1>
  
  <!--Cards com informações sobre as opções do usuário-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" id="cards">
        <img src="imagens/barber_animation.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Melhore seu atendimento</h5>
          <p class="card-text">Com o mestre-sala você pode gerenciar seus clientes de forma rápida e fácil</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="imagens/barbearia_animation.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Melhore seu negócio</h5>
          <p class="card-text">Você deseja controle sistematizado, na mestre-sala você cria uma conta e começa agora mesmo a mudar seu negócio</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="imagens/barbearia_animacao_1.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Divulge seu trabalho</h5>
          <p class="card-text">Divulgue seus serviços para todos os cadastrados do site, desde clientes até mesmo a concorrencia.</p>
        </div>
       
      </div>
    </div>
  </div>
  </div>
  <div class="card bg-dark text-white" id="card_foto_barberia">
    <img src="imagens/barbershop-4484300_1920.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h1>Conquiste clientes</h1>
      <p class="card-text">A propaganda é a alma do negócio, então se cadastrando você garante clientes e reconhecimento de seu serviço</p>
      
    </div>
  </div>
 
  <div class="frases">

    <div class="card">
         <!--
    
   -->
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
                  <h5 class="modal-title" id="exampleModalLabel">Cadastre sua barbearia</h5>
                  <button type="button" class="btn-close btn-close-white"  data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                
                
                <div class="modal-body">
                  <!--CADASTRO DE BARBEARIA-->
                  <form class="row g-3 needs-validation" name="cadBarbearia" method="post" action="controladores/MScadastro_barbearia.php"  novalidate >
                      
                  <div class="col-md-4 position-relative">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome"  required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o nome da barbearia
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="endereco" class="form-label">Endereço</label>
                      <input type="text" class="form-control" id="endereco" name="endereco"  required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o endereço de sua barbearia
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="endereco" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email" >
                      <div class="valid-tooltip">
                        Email não é obrigatório
                      </div>
                      
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="cep" class="form-label">CEP</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" class="form-control" id="cep" aria-describedby="validationTooltipUsernamePrepend" name="cep">
                        <div class="valid-tooltip">
                          Cep não é obrigatório
                        </div>
                        
                      </div>

                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="cidade" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="cidade" name="cidade" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira a cidade de sua barbearia
                      </div>
                    </div>
                      <div class="col-md-20 position-relative">
                        <label for="uf" class="form-label">UF</label>
                        <select class="form-select" id="uf" name="uf" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Selecione a UF(estado) de sua barbearia
                        </div>
                      </div>

                      

                    <div class="col-md-20 position-relative">
                      <label for="cnpj" class="form-label">CNPJ</label>
                      <input type="text" class="form-control" id="cnpj" name="cnpj" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira um CNPJ de preferencia valido
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="telefoneComercial" class="form-label">Telefone/Comercial</label>
                      <input type="text" class="form-control" id="telefoneComercial" name="telefoneComercial" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o telefone comercial
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="status" class="form-label">Status</label>
                      <select class="form-select" id="status" name="status" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Aberto</option>
                        <option>Fechado temporariamente/tempo indeterminado</option>
                        <option>Em reforma</option>
                      </select>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Selecione o status de sua barbearia
                      </div>
                    </div>
                      
                    <!--ADMIN-->

                    <div class="col-md-20 position-relative">
                      <label for="telefonePessoal" class="form-label">Telefone/Pessoal</label>
                      <input type="text" class="form-control" id="telefonePessoal" name="telefonePessoal" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Por favor insira o Telefone pessoal.
                      </div>
                    </div>
                    
                    <div class="col-md-20 position-relative">
                      <label for="senhaAcesso" class="form-label">Senha de acesso</label>
                      <input type="password" class="form-control" id="senhaAcesso" name="senhaAcesso" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Por favor insira uma senha de acesso.
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

     <script src="/arquivos_js/MScadastro_barbearia.js"></script>
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