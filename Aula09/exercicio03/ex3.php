<?php

    $lado = isset($_GET['lado']) ? floatval($_GET['lado']) : 0;
    $area = $lado * $lado;
    echo "<p>A área do quadrado de lado {$lado} metros é " . number_format($area, 2, ',', '.') . " metros quadrados</p>";

?>