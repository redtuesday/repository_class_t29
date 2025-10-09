<?php
session_start();

/** Faz a validação para ver se o usuário está logado */
if (!isset($_SESSION['usuario'])) {
    header('Location: index.html');
    exit();
}

// Atualiza data/hora sessão
if (!isset($_SESSION['session_start'])) {
    $_SESSION['session_start'] = date('Y-m-d H:i:s');
}

$_SESSION['ultima_request'] = date('Y-m-d H:i:s');

/** Tempo da Sessão */
$inicio = strtotime($_SESSION['session_start']);
$atual = strtotime($_SESSION['ultima_request']);
$tempoSessao = $atual - $inicio;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dados da Sessão</h2>
    <ul>
        <li><strong>Login:</strong> <?php echo $_SESSION['usuario']; ?></li>
        <li><strong>Senha:</strong> <?php echo isset($_SESSION['senha']) ? $_SESSION['senha'] : '---'; ?></li>
        <li><strong>Data/hora início da sessão:</strong> <?php echo $_SESSION['session_start']; ?></li>
        <li><strong>Data/hora da última requisição:</strong> <?php echo $_SESSION['ultima_request']; ?></li>
        <li><strong>Tempo de sessão:</strong> <?php echo $tempoSessao; ?> segundos</li>
    </ul>
    <a href="index.html">Sair</a>
</body>
</html>
