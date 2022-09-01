<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../arquivos_css/MSlogin_barbearia.css">
    <title>Sua barbearia</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    width: 100%;
    height: 100vh;
    background: linear-gradient(220deg, darkblue, rgb(70, 2, 7));
    background-position: center;
}
#logo img{
    border-radius: 50%;
}
#login_barbearia{
    width: 400px;
    padding: 30px;
    position: absolute;
    left: 50%;
    top: 50%;
    right: 50%;
    transform: translate(-50%,-50%);
    background: black;
}
#login_barbearia h1{
    border-bottom: solid orange;
    width: 180px;
    
}
#login_barbearia #receber{
    margin: 20px 30px;
    
}
#login_barbearia input{
    border: none;
    border-radius: 0;
    background: transparent;
    border-bottom: solid 2px orange;
    color: white;
}
#login_barbearia label{
    color: white;
}
#login_barbearia h1, p{
    color: white;
    text-align: center; 
}
#login_barbearia ,p a{
    text-decoration: none;
    color: orange;
}
#login_barbearia a:hover{
    color: yellow;
}
#login_barbearia #entrar{
    background: darkred;
    color: white;
    padding: 10px 150px;
    border: none;
    font-size: larger;
    border-radius: 2px;
}
#login_barbearia #entrar:hover{
    background: rgb(187, 3, 3);
}
#login_barbearia #acess_login_cliente{
    background: darkred;
    width: 50px;
    padding: 10px;
    color: white;
    font-size: larger;
    border-radius: 50%;
    border: none;
}
#login_barbearia  #acess_login_cliente:hover{
    background: rgb(187, 3, 3);
    
}
</style>
<body>
    <div class="container-fluid">
        <div id="logo">
            <img src="../imagens/logo_com_fundo.png" alt="" srcset="">
        </div>
            <form action="../controladores/MSvalidaLogin_barbearia.php" method="post" id="login_barbearia">
                <h1>L O G I N</h1>
                <p id="receber">Seja bem vindo!</p>

                <?php if(isset($_GET['mensagem'])){ ?>
                    <p style="color: orange;"><?php echo $_GET['mensagem'] ?></p>
                <?php  } ?>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email" required>
                    <label for="floatingInput"><i class="fas fa-envelope"></i> Email corporativo</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Senha" required>
                    <label for="floatingPassword"><i class="fas fa-key"></i> Senha</label>
                </div>
                <div class="links">
                    <p><a href="">Esqueceu sua senha ?</a></p>
                </div>
                <div class="botoes">
                    <p>
                        <button type="submit" name="entrar" id="entrar">Entre </button>
                    </p>
                  
      
                </div>
                <div class="links2">
                    <p>Cadastre sua barbearia <a href="MScadastro_barbearia.php">aqui</a></p>
                </div>
            </form>
        </div>


    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>