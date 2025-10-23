<?php

    $C          = 8654.00;
    $opcoes     = [24, 36, 48, 60];
    $comeco     = 0.02;  // 2% para 24x
    $porc_nivel = 0.003;  // +0.3% por nível

    foreach ($opcoes as $i => $n) {
        $rate = $comeco + ($i * $porc_nivel);
        $M = $C * pow(1 + $rate, $n); // montante composto
        $parcela = $M / $n;
        echo "<p>{$n}x — taxa " . number_format($rate*100,2,',','.') . "% por mês => Parcela: R$ " . number_format($parcela,2,',','.') . " (Montante: R$ " . number_format($M,2,',','.') . ")</p>";
    }
    
?>