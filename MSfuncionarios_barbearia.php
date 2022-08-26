<?php
    require_once("controladores/MSsessao_barbearia.php");

  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="arquivos_css/MStelaprincipal_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;

}
body{
    background: darkred;
}
.card{
    border: none;
    margin-top: 50px;
    margin-left: 10px;
    box-shadow: 1px 1px 40px 10px black;
}
.espacamento{
    width: 100%;
    height: 100px;
    background-image: url(imagens/barber-1453064_1920.jpg);
}
.pg_principal{
    width: 100%;
    height: 140vh;
    background-color: darkred;
    padding-top: 30px;
}
.pg_principal h1{
    color:white;
}
ul a{
    border-bottom: solid transparent;
    margin: 10px 5px;
    padding: 1em;
    padding-left: 100px;
    padding: 0 50px;
    text-align: center;
}
ul a:hover{
    border-bottom: solid darkred;
    color: white;
    transition: all .5s;
}
#contaBotao{
    background: darkred;
    border: none;
    border-radius: 5px;
    font-size: larger;

}
#recebeUsuario{
    color: white;
}
.card p{
    color: gray;
}
#fotoUsuarioSistema{
    border: solid 1px black;
    padding: 70px 70px;
    margin-left: 35%;
    border-radius: 50%;
}
footer .nav{
    background: black;
    padding: 20px;
    color: white;
}
.nav li img{
    border-radius: 50%;
}
#contaBotao{
    background: darkred;
    border: none;
    border-radius: 5px;
    font-size: larger;

}
</style>
<body>

    <!--Menu do barbeiro--->
    
    <?php require_once("componentes/menuBarbearia.php"); ?>


<!--Continuação do site-->
<div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal container">

    <h1>Funcionários da barbearia: </h1>
   
</div>
    

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
<?php require_once("componentes/rodape.php") ?>
</html>