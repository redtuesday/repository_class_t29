<?php

require_once '../src/db.php';
require_once '../src/auth.php';
verificarLogin(); // apenas usuários logados

$stmt = $pdo->query("
    SELECT p.texto, AVG(r.nota) AS media, COUNT(r.id) AS total
      FROM respostas r
      JOIN perguntas p 
        ON p.id = r.pergunta_id
     GROUP BY p.texto
     ORDER BY p.ordem
");

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Painel de Resultados</h1>

    <table>
        <tr>
            <th>Pergunta</th>
            <th>Média</th>
            <th>Respostas</th>
        </tr>

        <?php 
            foreach ($resultados as $r): 
        ?>

        <tr>
            <td><?= $r['texto'] ?></td>
            <td><?= number_format($r['media'], 2) ?></td>
            <td><?= $r['total'] ?></td>
        </tr>
        
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
