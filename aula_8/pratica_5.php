<?php
#PRATCA 5
/*Declarar um ARRAY que contenha os nomes das disciplinas
que vocês estão matriculados de segunda a sexta-feira.
Criar outro ARRAY que contenha os nomes dos professores
dessas disciplinas.
Fazer um LOOP for, que faça 5 iterações, e escreva o seguinte:
“Disciplina DDD, professor PPP.”*/

$disciplinas = array("Engenharia de Software II", "Banco de Dados II", "ADM de Sistemas de Informação", "Programação Web I", "Estrutura de Dados II");
$professores = array("Jullian Hermann", "Marco Aurélio", "Sandro Alencar", "Cleber Nardelli", "Fernando Bastos");

foreach ($disciplinas as $index => $disciplinas) {
    echo "Disciplina " . $disciplinas . ", professor " . $professores[$index] . "<br>";
};

$faculdade = array("Engenharia de Software II" => "Jullian Hermann", "Banco de Dados II" => "Marco Aurélio", "ADM de Sistemas de Informação" => "Sandro Alencar", "Programação Web I" => "Cleber Nardelli", "Estrutura de Dados II" => "Fernando Bastos");
foreach($faculdade as $key => $value) {
    echo "Disciplina " . $key . ", professor " . $value;
    echo "<br>";
}

?>