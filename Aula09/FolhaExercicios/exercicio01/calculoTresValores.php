<?php

    somaValores();

    /**
     * Realiza a soma dos valores passados por parâmetro e exibe o resultado
     * @param array
     */
    function somaValores(){
        $aValores = getValoresFromWeb();

        $soma = 0;
        foreach($aValores as $oValor){
            $soma += $oValor;
        }

        echo "O Valor da soma é de " . $soma;
    }

    /**
     * Recebe os valores informados na página WEB
     */
    function getValoresFromWeb(){
        $iValor1 = $_POST['valor1'];
        $iValor2 = $_POST['valor2'];
        $iValor3 = $_POST['valor3'];
       
        return [$iValor1, $iValor2, $iValor3];
    }

?>