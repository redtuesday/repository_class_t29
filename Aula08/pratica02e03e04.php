<?php

    $iSalario1 = 1000;
    $iSalario2 = 2000;

    $iSalario2 = $iSalario1;
    $iSalario2++;
    $iSalario1 = $iSalario1 * 1.1;
    
    // echo "Valor do Salário 1: $iSalario1 <br> Valor do Salário 2: $iSalario2";

    if($iSalario1 > $iSalario2){
        echo "Salário 1 é maior que Salário 2 <br>";
    } else if($iSalario2 > $iSalario1){
        echo "Salário 2 é maior que Salário 1 <br>";
    } else {
        echo "Salário 1 é igual ao Salário 2 <br>";
    }

    for($i = 0; $i < 100; $i++){
        if($i == 50){
            break;
        }
        $iSalario1++;
    }

    if($iSalario1 < $iSalario2){
        echo $iSalario1 . ' é menor que ' . $iSalario2;
    }
?>