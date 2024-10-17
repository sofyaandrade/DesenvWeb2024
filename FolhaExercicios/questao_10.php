<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 10 - Criação de Árvore de Pastas</title>
    </head>
    <body>
        <h1>Criação de Árvore de Pastas</h1>

        <?php
            $pastas = array(
                "bsn" => array(
                    "3a Fase" => array("DesenvWeb", "BancoDados 1", "EngSoft 1"),
                    "4a Fase" => array("Intro Web", "BancoDados 2","EngSoft 2")
                )
            );
            function imprimirArvore($array, $nivel = 0) {
                foreach ($array as $chave => $valor) {
                    echo str_repeat("--", $nivel) . " " . (is_array($valor) ? $chave : $valor) . "<br>";

                    if (is_array($valor)) {
                        imprimirArvore($valor, $nivel + 1);
                    }
                }
            }

            imprimirArvore($pastas);
        ?>
    </body>
</html>