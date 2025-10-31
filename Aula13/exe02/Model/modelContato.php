<?php

namespace exe02\Model;

class ModelContato {
    
    private $tipo;
    private $nome;
    private $valor;

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getTipo(){
        return $this->tipo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }
}