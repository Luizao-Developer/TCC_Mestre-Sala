<?php
 require_once("controladores/MSsessao_barbearia.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado com sucesso!</title>
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
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
        display: flex;
    }
    #mensagem{
        margin: auto;
        
    }
    #mensagem h1{
        color: orange;
    }
    #mensagem h5{
        color:white;
    }
    #mensagem a{
        color: orange;
        text-decoration: none;
    }
    #mensagem a:hover{
        text-decoration: underline;
    }
</style>
<body>
    <!--Mensagem de seja bem vindo-->

    <div id="mensagem">
       
        <h1>Parabéns cadastro realizado com sucesso! <i class="far fa-thumbs-up"></i> </h1>
        <p><h5>Seja bem vindo  ao mundo dos mestres, divulgue e de fama a seu negócio aqui na mestre-sala</h5></p>
        <p><h5>Entre agora mesmo e começe <a href="http:\TCC_Mestre-Sala\MSlogin_barbearia.php">L O G I N</a></h5></p>
        
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>