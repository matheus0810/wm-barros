<?php

class CategoriaDAO{

    public function CadastrarCategoria($nome){

        if($nome == ''){
            return 0;
        }else{
            return 1;
        }
    }

    public function ConsultarCategoria(){

    }

    public function DetalharCategoria(){

    }

    public function AlterarCategoria($nome){

        if($nome == ''){
            return 0;
        }else{
            return 1;
        }

    }

    public function ExcluirCategoria(){

    }

}

?>