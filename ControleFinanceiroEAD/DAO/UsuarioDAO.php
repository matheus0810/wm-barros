<?php

class UsuarioDAO{

    public function CarregarMeusDados(){

    }
    public function GravarMeusDados($nome, $email){
        if(trim($nome) == '' || trim($email) == ''){
            return 0;
        }else{
            return 1;
        }

        //Continuar 0 código desta função
        //Retornar 1, retornar o valor -1
    }

    public function ValidarLogin($email, $senha){
        if(trim($email) == '' || trim($senha) == ''){
            return 0;
        }else{
            return 1;
        }

    }

    public function ValidarCadastro($nome, $email, $senha, $repSenha){
        if(trim($nome) == '' || trim($email) == '' || trim($senha) == '' || trim($repSenha) == '' ){
            return 0;
        }else if(strlen($senha) < 6){
            return -2;
        }else if(trim($senha) != trim($repSenha)){
            return -3;
        }else{
            return 1;
        }
    }

    
}

?>