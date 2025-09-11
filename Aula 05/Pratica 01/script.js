let n1 = '';
let n2 = '';
let operation = '';
let isSecondNumber = false;

document.addEventListener('DOMContentLoaded', () => {
    const keys = document.querySelectorAll('.buttons button');
    const display = document.querySelector('#result');

    keys.forEach(key => {
        key.addEventListener("click", e => {
            const type  = key.getAttribute('data-type');
            const value = key.textContent;

            if (type === 'btn') {
                if (!isSecondNumber) {
                    n1 += key.value;
                    display.value = n1;
                } else {
                    n2 += key.value;
                    display.value = n1 + operation + n2;
                }
            } else if (type === 'operation') {
                if(n1 !== ''){
                    operation = key.getAttribute('value');
                    isSecondNumber = true;
                }
            } else if (type === 'equal') {
                if (n1 !== '' && n2 !== '' && operation !== '') {
                    const result = calculate(Number(n1), Number(n2), operation);
                    aplicaCor(result, display);
                    display.value = result;
                    
                    n1 = result;
                    n2 = '';
                    operation = '';
                    isSecondNumber = false;
                }
            } else if (type === 'clear') {
                n1 = '';
                n2 = '';
                operation = '';
                isSecondNumber = false;
                display.value = '';
            }
        });
    });
});

function calculate(n1, n2, operation){
    let result = 0;
    switch(operation){
        case '+':
            result = n1 + n2;
            break;
        case '-':
            result = n1 - n2;
            break;
        case '*':
            result = n1 * n2;
            break;
        case '/':
            result = n1 / n2;
            break;
        default:
            result = 0;
    }

    return result;
}

function aplicaCor(result, display) {
    if (result > 0) {
        display.style.backgroundColor = 'lightgreen';
    } else if (result < 0) {
        display.style.backgroundColor = 'lightcoral';
    } else if (result == 0) {
        display.style.backgroundColor = 'lightgrey';
    }
}
