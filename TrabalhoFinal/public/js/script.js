/**
 * Responsável por interações básicas do formulário.
 * Exemplo: mensagem de agradecimento no envio.
 */
document.querySelector('form').addEventListener('submit', () => {
    alert('Obrigado pela sua avaliação!');
});

/**
 * Responsável por alterar a cor dos botões de escala
 * conforme o valor selecionado
 */
document.querySelectorAll('.escala input[type="radio"]').forEach(input => {
    input.addEventListener('change', (e) => {
        const value = parseInt(e.target.value);
        const escala = e.target.closest('.escala');

        // Remove classes de cor de todos os botões dessa escala
        escala.querySelectorAll('input').forEach(radio => {
            radio.classList.remove('low', 'medium', 'high');
        });

        // Aplica a cor conforme o valor
        if (value <= 3) {
            e.target.classList.add('low');     
        } else if (value <= 6) {
            e.target.classList.add('medium'); 
        } else {
            e.target.classList.add('high');     
        }
    });
});

