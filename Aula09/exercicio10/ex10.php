<?php
$pastas = [
    "bsn" => [
        "3ª Fase" => ["Desenvolvimento Web", "BD 1", "EngSoft 1"],
        "4ª Fase" => ["Introdução Web", "BD 2", "EngSoft 2"]
    ]
];

function imprimir_arvore_html(array $nodos): void {
    echo "<ul>";
    foreach ($nodos as $chave => $valor) {
        if (is_array($valor)) {
            echo "<li>" . htmlspecialchars((string)$chave);
            imprimir_arvore_html($valor);
            echo "</li>";
        } else {
            echo "<li>" . htmlspecialchars((string)$valor) . "</li>";
        }
    }
    echo "</ul>";
}

imprimir_arvore_html($pastas);

?>