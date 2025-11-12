<?php

require_once 'db.php';
require_once 'funcoes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Limpa o campo de feedback (caso preenchido)
    $feedback = limparTexto($_POST['feedback'] ?? '');

    /** Loop por todas as respostas enviadas */
    foreach ($_POST['resposta'] as $id_pergunta => $nota) {
        $stmt = $pdo->prepare("
            INSERT INTO respostas (pergunta_id, nota, feedback)
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$id_pergunta, $nota, $feedback]);
    }

    // Redireciona o usuário para a página de agradecimento
    header("Location: ../public/obrigado.html");
    exit;
}
?>
