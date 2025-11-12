<?php

session_start();

/**
 * Realiza login no sistema.
 *
 * @param string $usuario
 * @param string $senha
 * @return bool
 */
function login($usuario, $senha) {
    // Credenciais fixas de exemplo (poderia vir de um banco)
    if ($usuario === 'admin' && $senha === '1234') {
        $_SESSION['logado'] = true;
        return true;
    }
    return false;
}

/**
 * Verifica se o usuário está logado.
 * Caso contrário, redireciona para a página inicial.
 */
function verificarLogin() {
    if (!isset($_SESSION['logado'])) {
        header('Location: index.php');
        exit;
    }
}

/**
 * Encerra a sessão do usuário.
 */
function logout() {
    session_destroy();
    header('Location: index.php');
}

?>
