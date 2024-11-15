<?php

try {
    $dbconn = pg_connect("host=localhost
                          port=5432 
                          dbname=desenvweb 
                          user=postgres 
                          password = postgres");
    if ($dbconn) {
        echo "database conectaado...";

        $result = pg_query($dbconn,"SELECT COUNT(*) AS QTDTABS FROM PG_TABLES");

        while ($row = pg_fetch_array($result)) {
            echo "<br>Result :".$row['qtdtabs'];
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
};

$aDados = array($_POST['campo_primeiro_nome'],
                $_POST['campo_sobrenome'],
                $_POST['campo_email'],
                $_POST['campo_password'],
                $_POST['campo_cidade'],
                $_POST['campo_estado']
);

$result = pg_query_params($dbconn, "INSERT INTO TBPESSOA
                                    (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                                    VALUES
                                    ($1, $2, $3, $4, $5, $6)",
                                    $aDados
);

?>