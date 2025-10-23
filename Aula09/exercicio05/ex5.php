<?php

    $base = isset($_GET['base']) ? floatval($_GET['base']) : 0;
    $altura = isset($_GET['altura']) ? floatval($_GET['altura']) : 0;
    $resultado = ($base * $altura) / 2;
    echo "<p>A área do triângulo de base {$base} e altura {$altura} é " . number_format($resultado,2,',','.') . " metros quadrados.</p>";

?>
