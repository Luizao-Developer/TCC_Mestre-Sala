<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../cliente_arquivos_css/MSlogin_cliente.css">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
    <div id="logo">
        <img src="../imagens/logo_com_fundo.png" alt="" srcset="">
    </div>
        <form action="../controladorCliente/MSvalidaLogin_cliente.php" method="POST" id="login_cliente">
            <h1>L O G I N</h1>
            <p id="receber">Seja bem vindo!</p>

            <?php if(isset($_GET['mensagem'])){ ?>
                    <p style="color: orange;"><?php echo $_GET['mensagem'] ?></p>
                    <?php  } ?>
                
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email_cliente" placeholder="Email" required>
                <label for="floatingInput"><i class="fas fa-envelope"></i> Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="senha_cliente" placeholder="Senha" required>
                <label for="floatingPassword"><i class="fas fa-key"></i> Senha</label>
            </div>
            <input type="hidden" name="sessao" value="1">
            <div class="links">
                <p><a href="esqueceuSenha.php">Esqueceu sua senha ?</a></p>
            </div>
            <div class="botoes">
                <p>
                    <button type="submit" name="entrar" id="entrar">Entre </button>
                </p>
                
  
            </div>
            <div class="links2">
                <p>Não tem conta <a href="MScadastro_cliente.php">cadastre-se</a></p>
            </div>
        </form>
    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
</body>

</html>