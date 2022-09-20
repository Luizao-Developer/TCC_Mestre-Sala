<?php

function getProximoContadorArquivos(){
    $arquivo = "contadorArquivos.txt";

    $handle = fopen($arquivo, 'r+'); //Abrir o arquivo
    $dados = fread($handle, 512); //Pega o conteudo do arquivo

     //Incrementa em mais 1
    if(is_int($dados)){
        $contador = $dados + 1;
    }else{
        $contador = 1;
    }

    fseek($handle, 0);//Ponteiro volta para o inicio do arquivo
    fwrite($handle, $contador); //Escreve no arquivo
    fclose($handle); //Fecha o arquivo

    return $contador;
}
function adicionaArquivos($nomeArquivo, $arquivoTmp){
    $ext = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
    $imagem = getProximoContadorArquivos().".".$ext;
    $caminhoDestino = "imagens/" . $imagem;

    move_uploaded_file($arquivoTmp,$caminhoDestino);
    return $imagem;
}
function getImagemUsuario($Codigo, $conexao){
    $sql = "select Foto from tbcliente where Codigo = " . $Codigo;
    $resultado = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_array($resultado);

    return $linha['Foto'];
}
function excluiArquivo($pathArquivo){
    if(!is_dir($pathArquivo) && file_exists($pathArquivo)){
        unlink($pathArquivo);
    }
}
?>