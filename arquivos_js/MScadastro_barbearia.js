import Jqueey from "./Jquery"

var cadastrar = document.getElementById("cadastrar")

function cadastrar(){
    

    var dadosCadBarbearia = {
        'nome' : $("#nome").val(),
        'endereco' : $("#endereco").val(),
        'cep' : $("#cep").val(),
        'cidade' : $("#cidade").val(),
        'uf' : $("#uf").val(),
        'cnpj' : $("#cnpj").val(),
        'telefoneComercial' : $("#telefoneComercial").val(),
        'status' : $("#status").val(),
        'telefonePessoal' : $("#telefonePessoal").val(),
        'senhaAcesso' : $("#senhaAcesso").val()
    };
    arquivoPHP = 'arquivos_php/MScadastro_barbearia.php';
    alert("recebeu dados")
    $.ajax({
         
        url : arquivoPHP,
        data: dadosCadBarbearia,
        type: "POST",
        cache: false,

        error: function(){
            alert("Houve um erro ao inserir registro! ");
        },
        success: function(resultado){
            if($.trim(resultado) == '1'){
                alert("Registro inserido com sucesso");
            }else{
                alert("Ocorreu um erro ao inserir o seu registro! ")
            }
        }
    });
    
}

//TESTE 

