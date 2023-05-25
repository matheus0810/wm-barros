<?php

//require_once 'utilDAO.php';

class MovimentoDAO{

    public function RealizarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta){

        if($tipo == '' || $data == '' || $valor == '' || $categoria == '' || $empresa == '' || $conta == ''){
            return 0;
        }else{
            return 1;
        }
    }

    public function ConsultarMovimento($tipo, $dataInicial, $dataFinal){
        if($tipo == '' || $dataInicial == '' || $dataFinal == '' ){
            return 0;
        }else{
            return 1;
        }

    }

    public function ExcluirMovimento(){

    }
    
}







?>