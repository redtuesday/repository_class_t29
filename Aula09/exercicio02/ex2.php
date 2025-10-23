<?php

    $num = isset($_GET['num']) ? intval($_GET['num']) : 0;
    if ($num % 2 === 0) {
        echo "<p>Valor divisível por 2</p>";
    } else {
        echo "<p>O valor não é divisível por 2</p>";
    }
    
?>