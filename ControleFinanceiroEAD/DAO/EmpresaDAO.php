<?php

//require_once 'utilDAO.php';

class EmpresaDAO{

    public function CadastrarEmpresa($nome, $telefone, $endereco){
        
        if($nome == '' || $telefone == '' || $endereco == ''){
            return 0;
        }else{
            return 1;
        }
    }

    public function ConsultarEmpresa(){

    }

    public function DetalharEmpresa(){

    }

    public function AlterarEmpresa($nome, $telefone, $endereco){

        if($nome == '' || $telefone == '' || $endereco == ''){
            return 0;
        }else{
            return 1;
        }

    }

    public function ExcluirEmpresa(){

    }
}

?>