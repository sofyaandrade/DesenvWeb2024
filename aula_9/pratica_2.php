<?php
/*Dado o Array, pede-se para recursivamente criar a
árvore ao lado:

Prática 2 – Árvore Recursiva
$pastas =
    array("bsn" =>
        array("3a Fase" =>
            array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" =>
        array("Intro Web", "bancoDados 2", "engSoft 2")));
desafioo
*/

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