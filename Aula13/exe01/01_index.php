<?php

require_once "01_pessoa.php";
    
$oPessoa = new Pessoa();
$oPessoa->setNome("Samuel");
$oPessoa->setSobrenome("Wiggers");

echo $oPessoa->getNomeCompleto();
