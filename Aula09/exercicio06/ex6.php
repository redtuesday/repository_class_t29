<?php

    $saldo = 50.00;
    $produtos = [
        'Maçã'      => ['preco_kg' => 4.50, 'kg' => 1.2],
        'Melancia'  => ['preco_kg' => 1.80, 'kg' => 3.0],
        'Laranja'   => ['preco_kg' => 3.20, 'kg' => 1.0],
        'Repolho'   => ['preco_kg' => 2.50, 'kg' => 0.8],
        'Cenoura'   => ['preco_kg' => 2.90, 'kg' => 0.5],
        'Batatinha' => ['preco_kg' => 3.75, 'kg' => 0.6],
    ];

    $total = 0.0;
    echo "<ul>";
    foreach ($produtos as $nome => $info) {
        $valor = $info['preco_kg'] * $info['kg'];
        $total += $valor;
        echo "<li>{$nome}: R$ " . number_format($valor,2,',','.') . " ({$info['kg']} kg x R$ " . number_format($info['preco_kg'],2,',','.') . ")</li>";
    }
    echo "</ul>";
    echo "<p>Total da compra: R$ " . number_format($total,2,',','.') . "</p>";

    if ($total > $saldo) {
        $falta = $total - $saldo;
        echo "<p style='color:red'>Faltam R$ " . number_format($falta,2,',','.') . "</p>";
    } elseif ($total < $saldo) {
        $resto = $saldo - $total;
        echo "<p style='color:blue'>Sobram R$ " . number_format($resto,2,',','.') . "</p>";
    } else {
        echo "<p style='color:green'>Saldo esgotado (R$ " . number_format($saldo,2,',','.') . ")</p>";
    }

?>