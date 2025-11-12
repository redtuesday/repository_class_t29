<?php

require_once 'db.php';

/**
 * Obtém todas as perguntas cadastradas no banco de dados.
 *
 * @param PDO $pdo
 * @return array
 */
function obterPerguntas($pdo) {
    $stmt = $pdo->query("SELECT * FROM perguntas ORDER BY ordem ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
