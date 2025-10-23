<?php

    $preco_vista = 22500.00;
    $parcelas = 60;
    $valor_parcela = 489.65;
    $total_pago = $parcelas * $valor_parcela;
    $juros = $total_pago - $preco_vista;

    echo "<p>Preço à vista: R$ " . number_format($preco_vista,2,',','.') . "</p>";
    echo "<p>Total pago (60 x R$ " . number_format($valor_parcela,2,',','.') . "): R$ " . number_format($total_pago,2,',','.') . "</p>";
    echo "<p>Juros pagos: R$ " . number_format($juros,2,',','.') . "</p>";

?>