<?php

/**
 * limpa o texto removendo espaços e convertendo caracteres especiais.
 *
 * @param string $texto Texto a ser limpo.
 * @return string Texto seguro para inserção no banco ou exibição.
 */
function limparTexto($texto) {
    return htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8');
}

?>
