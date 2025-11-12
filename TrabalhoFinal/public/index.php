<?php

require_once '../src/perguntas.php';
$perguntas = obterPerguntas($pdo);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Avaliação de Qualidade</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>Avaliação de Qualidade</h1>

    <form method="POST" action="../src/respostas.php">
        <!-- Exibe de forma dinâmica as perguntas -->
        <?php foreach ($perguntas as $p): ?>
            <div class="pergunta">
                <p><?= $p['texto'] ?></p>
                <div class="escala" data-pergunta-id="<?= $pergunta['id'] ?>">
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                        <label>
                            <input type="radio" name="resposta[<?= $p['id'] ?>]" value="<?= $i ?>" required>
                            <?= $i ?>
                        </label>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="pergunta aberta">
            <p>Comentário (opcional):</p>
            <textarea name="feedback" rows="4"></textarea>
        </div>

        <p class="anonimo">
            Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.
        </p>

        <button type="submit">Enviar Avaliação</button>
    </form>
</div>

<script src="js/script.js"></script>
</body>
</html>
