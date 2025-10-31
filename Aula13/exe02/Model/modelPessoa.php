<?php

namespace exe02\Model;

use DateTime;

class ModelPessoa {
    
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $cpfCnpj;
    private $tipo;
    private $telefone;
    private $endereco;

    private $contatos = array();

    public function __construct(){
        $this->inicializaClasse();
    }

    private function inicializaClasse(){

    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setCpfCnpj($cpfCnpj){
        $this->cpfCnpj = $cpfCnpj;
    }

    public function getCpfCnpj(){
        return $this->cpfCnpj;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getNomeCompleto(){
        return $this->nome . " " . $this->sobrenome;
    }

    public function getIdade(){
        $dataNascimento = new DateTime($this->dataNascimento);
        $dataAtual      = new DateTime();
        $idade          = $dataAtual->diff($dataNascimento);
        return "O " . $this->getNome() . " Tem " . $idade->y . " anos";
    }

    public function addContato(ModelContato $contato){
        $this->contatos[] = $contato;
    }

    public function addContatosByTipo($tipo){
        $contatosTipo = array();
        foreach($this->contatos as $contato){
            if($contato->getTipo() == $tipo){
                $contatosTipo[] = $contato;
            }
        }
        return $contatosTipo;
    }

}