<?php
    $connectionString = "host=localhost
                         port=5432
                         dbname=local
                         user=postgres
                         password=unidavi";

    $connection = pg_connect($connectionString);
    if(!$connection){
        echo "Erro ao conectar no banco de dados.";
        exit();
    }

    // Recebe dados do formulário
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $pesnome      = isset($_POST['pesnome'])      ? trim($_POST['pesnome'])      : '';
        $pessobrenome = isset($_POST['pessobrenome']) ? trim($_POST['pessobrenome']) : '';
        $pesemail     = isset($_POST['pesemail'])     ? trim($_POST['pesemail'])     : '';
        $pespassword  = isset($_POST['pespassword'])  ? trim($_POST['pespassword'])  : '';
        $pescidade    = isset($_POST['pescidade'])    ? trim($_POST['pescidade'])    : '';
        $pesestado    = isset($_POST['pesestado'])    ? trim($_POST['pesestado'])    : '';

        // Insere no banco
        $aDadosPessoa = array(
            $pesnome,
            $pessobrenome,
            $pesemail,
            $pespassword,
            $pescidade,
            $pesestado,
        );

        $resultInsert = pg_query_params($connection,
                            "INSERT INTO tbpessoa (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado)
                             VALUES ($1, $2, $3, $4, $5, $6)", 
                             $aDadosPessoa);

        if($resultInsert){
            echo "Registro inserido com sucesso.";
        } else {
            echo "Erro ao inserir registro";
            $err = pg_last_error($connection);
            echo "Detalhes: $err";
        }

        echo "<p><a href=\"index.html\">Voltar</a></p>";
        exit();
    }

    $result = pg_query($connection, 
                        "SELECT COUNT(*) AS QTDABS FROM PG_TABLES");
    
    if($result){
        $row = pg_fetch_assoc($result);
        echo "<br/>Quantidade de tabelas no banco: " . $row['qtdabs'];
    } else {
        echo "Erro na consulta.";
    }
?>
