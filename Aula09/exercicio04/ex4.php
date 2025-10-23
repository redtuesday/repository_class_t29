<?php

    $a = isset($_GET['a']) ? floatval($_GET['a']) : 0;
    $b = isset($_GET['b']) ? floatval($_GET['b']) : 0;
    $area = $a * $b;
    if ($area > 10) {
        echo "<h1>A área do retângulo de lados {$a} e {$b} metros é " . number_format($area,2,',','.') . " metros quadrados.</h1>";
    } else {
        echo "<h3>A área do retângulo de lados {$a} e {$b} metros é " . number_format($area,2,',','.') . " metros quadrados.</h3>";
    }
    
?>