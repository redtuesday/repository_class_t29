function adicionarLinhaTotalizadora() {
    const tabela = document.querySelector('table');
    const linhas = tabela.querySelectorAll('tr');
    let somaNotas = Array(9).fill(0);
    let contadorNotas = Array(9).fill(0);

    // Começa da terceira linha (pula os cabeçalhos)
    for (let i = 2; i < linhas.length; i++) {
        const celulas = linhas[i].querySelectorAll('td');
        for (let j = 1; j <= 9; j++) {
            let valor = parseFloat(celulas[j]?.textContent.replace(',', '.'));
            if (!isNaN(valor)) {
                somaNotas[j-1] += valor;
                contadorNotas[j-1]++;
            }
        }
    }

    const novaLinha = document.createElement('tr');
    const th = document.createElement('th');
    th.textContent = 'Média Nota';
    novaLinha.appendChild(th);

    for (let i = 0; i < 9; i++) {
        const td = document.createElement('td');
        td.textContent = contadorNotas[i] ? (somaNotas[i] / contadorNotas[i]).toFixed(2) : '';
        novaLinha.appendChild(td);
    }
    tabela.appendChild(novaLinha);
}

function adicionarColunaTotalizadora() {
    const tabela = document.querySelector('table');
    const linhas = tabela.querySelectorAll('tr');

    // Adiciona cabeçalho da nova coluna
    if (linhas[0].children.length < 11) {
        linhas[0].appendChild(document.createElement('th')).textContent = 'Média Aluno';
        linhas[1].appendChild(document.createElement('th'));
    }

    // Para cada aluno, calcula média e adiciona célula
    for (let i = 2; i < linhas.length; i++) {
        const celulas = linhas[i].querySelectorAll('td');
        let soma = 0, count = 0;
        for (let j = 1; j <= 9; j++) {
            let valor = parseFloat(celulas[j]?.textContent.replace(',', '.'));
            if (!isNaN(valor)) {
                soma += valor;
                count++;
            }
        }
        
        const td = document.createElement('td');
        td.textContent = count ? (soma / count).toFixed(2) : '';
        linhas[i].appendChild(td);
    }
}