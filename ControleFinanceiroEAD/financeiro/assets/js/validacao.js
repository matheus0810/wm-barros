// Validação: Tela de Login (Index).
function ValidarLogin(){
    if($("#email").val().trim() == ''){
        alert("Preencher o campo e-mail!");
        $("#email").focus();
        return false;
    }

    if($("#senha").val().trim() == ''){
        alert("Preencher o campo senha!");
        $("#senha").focus();
        return false;
    }

    if($("#senha").val().lenght() <= 6){
        alert("O Campo senha deve ter no minimo 6 caracteres!");
        $("#senha").focus();
        return false;
    }
}
function ValidarCadastro(){
    if($("#nomeUsuario").val().trim() == ''){
        alert("Preencher o campo Nome!");
        $("#nomeUsuario").focus();
        return false;
    }

    if($("#email").val().trim() == ''){
        alert("Preencher o campo E-mail!");
        $("#email").focus();
        return false;
    }

    if($("#senha").val().trim() == ''){
        alert("Preencher o campo Senha");
        $("#senha").focus();
        return false;
    }

    if($("#senha").val().lenght() < 6){
        alert("O Campo senha deve ter no minimo 6 caracteres!");
        $("#senha").focus();
        return false;
    }

    if($("#repSenha").val().trim() == ''){
        alert("O Campo senha e repetir senha deverá ser igaul!");
        $("#repSenha").focus();
        return false;
    }

}
function ValidarMeusDados(){
    if($("#nome").val().trim() == ''){
        alert("Preencher o campo Nome!");
        $("#nome").focus();
        return false;
    }

    if($("#email").val().trim() == ''){
        alert("Preencher o campo E-mail!");
        $("#email").focus();
        return false;
    }
    
    
}

function ValidarCategoria(){
    if( $("#nomecategoria").val().trim() == ''){
        alert("Preencher o campo Nome da categoria!");
        $("#nomecategoria").focus();
        return false;

    }

}

function ValidarEmpresa(){

    if( $("#nomeEmpresa").val().trim() == ''){
        alert("Preencher o campo Nome da empresa!");
        $("#nomeEmpresa").focus();
        return false;
    }

    if( $("#telefone").val().trim() == ''){
        alert("Preencher o campo Telefone (Whatsapp)!");
        $("#telefone").focus();
        return false;
    }

    if( $("#endereco").val().trim() == ''){
        alert("Preencher o Campo Endereço da empresa!");
        $("#endereco").focus();
        return false;
    }

    
}

function ValidarConta(){
    if( $("#banco").val().trim() == ''){
        alert("Preencher o campo Nome do Banco!");
        $("#banco").focus();
        return false;
    }

    if( $("#agencia").val().trim() == ''){
        alert("Preencher o campo Agência!");
        $("#agencia").focus();
        return false;
    }

    if( $("#numero").val().trim() == ''){
        alert("Preencher o campo Número!");
        $("#numero").focus();
        return false;
    }

    if( $("#saldo").val().trim() == ''){
        alert("Preencher o campo Saldo!");
        $("#saldo").focus();
        return false;
    }

}

// Validação: Tela de Realização de Movimento.
function ValidarMovimento(){
    if( $("#tipo").val() == ''){
        alert("Selecione um Tipo de Movimento!");
        $("#tipo").focus();
        return false;
    }

    if( $("#data").val() == ''){
        alert("Selecione uma Data para o Movimento!");
        $("#data").focus();
        return false;
    }

    if( $("#valor").val().trim() == ''){
        alert("Selecione o Campo Valor do Movimento");
        $("#valor").focus();
        return false;
    }

    if( $("#categoria").val() == ''){
        alert("Selecione uma Categoria!");
        $("#tipo").focus();
        return false;
    }

    if( $("#empresa").val() == ''){
        alert("Selecione uma Empresa!");
        $("#empresa").focus();
        return false;
    }

    if( $("#conta").val() == ''){
        alert("Selecione uma Conta Bancária!");
        $("#conta").focus();
        return false;
    }
}

function ConsultarMovimento(){
    if( $("#tipo").val() == ''){
        alert("Selecione um Tipo de Movimento!");
        $("#tipo").focus();
        return false;
    }

    if( $("#dataInicial").val() == ''){
        alert("Selecione uma Data Inicial!");
        $("#dataInicial").focus();
        return false;
    }

    if( $("#dataFinal").val() == ''){
        alert("Selecione uma Data Final!");
        $("#dataFinal").focus();
        return false;
    }
}