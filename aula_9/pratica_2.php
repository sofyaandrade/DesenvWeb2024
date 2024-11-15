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
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
    )
);

function exibirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        echo str_repeat("-", $nivel) . " " . (is_array($valor) ? $chave : $valor) . "<br>";
        if (is_array($valor)) {
            exibirArvore($valor, $nivel + 1);
        }
    }
}

// Chamada da função para exibir a árvore
exibirArvore($pastas);

?>

