<?php
define("notas", array(10, 9, 7, 8, 5, 8, 10));
define("freq",array(0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0));

function calculaMedia() {
    $somaNotas = 0;
    for ($i = 0; $i < count(notas); $i++) {
        $somaNotas += notas($i);
    }
    return $somaNotas / count(notas);
}

function statusAprovacaoNotas() {
    if (calculaMedia() >= 7) {
        return "Aprovado";
    } 
    return "Reprovado";
}

function calculaFreq() {
    $somaFaltas = 0;
    for($i = 0; $i< count(freq); $i++) {
        $somaFaltas += freq[$i];
    }
    $frequencia = 100 - (($somaFaltas * 100 / $i));
    return $frequencia;
}

function statusAprovacaoFreq() {
    if (calculaFreq() >= 70) {
        return "Aprovado";
    } 
    return "Reprovado";
}

$mediaNotas = calculaMedia();
$aprovacaoNotas = statusAprovacaoNotas();
$calculoFreq = calculaFreq();
$aprovacaoFreq = statusAprovacaoFreq();

exibeMensagem (
    "Média Notas $mediaNotas <br>".
    "Aprovado por nota $aprovacaoNotas <br>".
    "Média Frquencia $mediaFreq <br>".
    "Aprovado por frequencia $aprovacaoFreq <br>"
)
?>
