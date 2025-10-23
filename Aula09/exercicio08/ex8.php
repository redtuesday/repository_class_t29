<?php

    $C = 8654.00;
    $opcoes = [24, 36, 48, 60];
    $comeco = 0.015; // 1.5% para 24x
    $porc_nivel = 0.005;  // +0.5% por nível

    foreach ($opcoes as $i => $n) {
        $rate = $comeco + ($i * $porc_nivel);
        $M = $C * (1 + $rate * $n); // juros simples
        $parcela = $M / $n;
        echo "<p>{$n}x — taxa " . number_format($rate*100,2,',','.') . "% por mês => Parcela: R$ " . number_format($parcela,2,',','.') . " (Total: R$ " . number_format($M,2,',','.') . ")</p>";
    }

?>