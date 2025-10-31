<?php 

require_once "Model/modelPessoa.php";
require_once "Model/modelContato.php";

use exe02\Model\ModelPessoa,
    exe02\Model\ModelContato;

$oPessoa = new ModelPessoa();
$oPessoa->setNome("Samuel");
$oPessoa->setSobrenome("Wiggers");
$oPessoa->setDataNascimento("2005-12-06");
$oPessoa->setCpfCnpj("123.456.789-00");
$oPessoa->setTipo(1);
$oPessoa->setTelefone("(11) 91234-5678");
$oPessoa->setEndereco("Rua Exemplo, 123, Cidade, Estado");

echo $oPessoa->getIdade();

$oContato = new ModelContato();
$oContato->setTipo(1);
$oContato->setNome("Email");
$oContato->setValor("teste@unidavi.edu.br");