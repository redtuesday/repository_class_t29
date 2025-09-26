<?php

    $aMateria = [
        'Segunda' => 'Linguagens e Paradigmas',
        'Terça' => 'Algoritmos',
        'Quarta' => 'Linguagens e Sistemas de Informação',
        'Quinta' => 'Programação Web',
        'Sexta' => 'Banco de Dados',
    ];

    $aProfessor = [
        'Ademar',
        'Bastos (Vascaíno)',
        'Marciel (Esse é gente boa)',
        'Cleber (goleiro)',
        'Treme-treme',
    ];

    for($i = 0; $i < count($aMateria); $i++){
        echo 'Na ' . array_keys($aMateria)[$i] . ' temos a matéria de ' . $aMateria[array_keys($aMateria)[$i]] . ' com o professor ' . $aProfessor[$i] . '<br>';
    }
?>