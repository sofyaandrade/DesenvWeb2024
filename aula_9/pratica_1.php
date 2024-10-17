<?php
#PRÁTiCA 1
/*Utilizando functions, implementar um programa PHP
para:
Declarar array com notas (quantas vc quiser);
Declarar array com faltas (cada posição é um dia)
Criar functions para:
Calcular e retornar a média das notas;
Verificar e retornar o status da aprovação por nota Aprovado, caso
a média seja maior do 7;
Calcular e retornar a frequência do aluno;
Verificar e retornar o status da aprovação por frequência Aprovado
caso > 70%;
Fazer as chamadas para as funcs e exibir;*/

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
    $somafreq = 0;
    for ($i = 0; $i < count(freq); $i++) {
        $somafreq += freq($i);
    }
    return $somafreq / count(freq); 
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