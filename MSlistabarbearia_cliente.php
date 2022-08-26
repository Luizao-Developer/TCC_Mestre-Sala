<?php

    require_once("controladores/MSsessao_cliente.php");

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="arquivos_css/MStelaprincipal_cliente.css">
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
ul a{
    border-bottom: solid transparent;
    margin: 10px 5px;
    padding: 1em;
    padding-left: 100px;
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
#filtro{
    padding-bottom:20px;
}
#filtro input{
    margin: 10px 10px;
    border-radius: 5px;
}
</style>
<body>
<?php require_once("componentes/menuCliente.php"); ?>
<div class="espacamento">

</div>
<div class="pg_principal container">

        <!--Area de filtro-->
        <div id="filtro">
            <div class="input-group mb-3">
                
                        <input type="text" class="form-control" name="nome_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nome da barbearia">
                        <input type="text" class="form-control" name="cidade_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cidade">
                        <input type="text" class="form-control" name="email_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Email da barbearia">
                        <input type="text" class="form-control" name="nome_admin_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nome Administrador">
            </div>
            <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="status_barbearia">
                        <option>Aberto</option>
                        <option>Fechado temporariamente/tempo indeterminado</option>
                        <option>Em reforma</option>
                    </select>
            </div>
            <div id="botao">
                <button class="btn btn-warning"><i class="fas fa-filter" name="filtrar"></i> Filtrar </button>
            </div>
        </div>


        <!--Area dos cards de barbearias-->
        
</div>
 

</body>

<?php require_once("componentes/rodape.php") ?>



</html>