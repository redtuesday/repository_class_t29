<?php

    $a = isset($_GET['a']) ? floatval($_GET['a']) : 0;
    $b = isset($_GET['b']) ? floatval($_GET['b']) : 0;
    $c = isset($_GET['c']) ? floatval($_GET['c']) : 0;
    $sum = $a + $b + $c;

    if ($a > 10) {
        echo "<p style='color:blue'>Soma: {$sum}</p>";
    } elseif ($b < $c) {
        echo "<p style='color:green'>Soma: {$sum}</p>";
    } elseif ($c < $a && $c < $b) {
        echo "<p style='color:red'>Soma: {$sum}</p>";
    } else {
        echo "<p>Soma: {$sum}</p>";
    }
?>