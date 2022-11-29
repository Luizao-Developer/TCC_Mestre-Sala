
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../cliente_arquivos_css/esqueceuSenha.css">
    <title>Mestre-Sala</title>
</head>
<body>
    <div class="mensagemCodigo">

    </div>
    <div class="janelaCentral">
    <div id="logo">
        <img src="../imagens/logo_com_fundo.png" alt="" srcset="">
    </div>
        <h2>Problemas para acessar sua conta ?</h2>
        <p><h5>Insira seu email para ser enviado um link, <p>pára então redefinir sua senha e voltar a ter acesso a sua conta!</p></h5></p>
        <p>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email" required>
                <label for="floatingInput"><i class="fas fa-envelope"></i> Email</label>
            </div>
        </p>
        <p>
            <button id="link" >Enviar link</button>
        </p>
        <hr> 
        <p>
            <a href="MScadastro_cliente.php">Criar uma nova conta</a>
        </p>
        <hr>
        <p>
            <a href="MSlogin_cliente.php">Retornar ao login</a>
        </p>
    </div>
     
</body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
  
  $("#link").click(function(){
      var email = $("#floatingInput").val();
       //var email = "ju@gmail.com";
      $.ajax({
        url: "../controladorCliente/geraLinkSenha.php",
        type : 'POST',
        data : 'email=' + email,
        success: function(response){
            $(".mensagemCodigo").append(response);
        }
      })
  })

</script>

    </html>