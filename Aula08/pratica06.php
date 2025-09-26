<?php

    $aArray = [
        'Disciplina' => [
            'Matemática',
            'Português',
            'Geografia',
            'Educação Física',
        ],
        'Faltas' => [
            5,
            2,
            10,
            2,
        ],
        'Média' => [
            8.5,
            9.0,
            6.0,
            8.0,
        ]
    ];

    echo "<table border= '1px' solid black>";

    foreach($aArray as $key => $value){
        echo "<tr>
                <th colspan='3' style='background-color: lightblue;'>" . $key . "</td>
            </tr>";
        for($i = 0; $i < count($value); $i++){
            echo "<tr>
                    <td>" . $value[$i] . "</td>
                </tr>";
        }
    }

?>