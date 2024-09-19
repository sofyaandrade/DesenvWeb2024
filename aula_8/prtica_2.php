<?php
$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
++$salario2;
$salario1 = $salario1 * 1.1;

echo 'O valor do salário 1 é '. $salario1 ."  e o valor de salario 2 é $salario2 <br>" ;

#PRATCA 3
#se for aspas simples pecisa concatenar, se for duplas não precisa
/*Utilizando o mesmo programa criado na Prática 2,
fazer:
Se o valor da variável SALARIO1 for MAIOR que o valor da
variável SALARIO2, então escrever:
“O Valor da variável 1 é maior que o valor da variável 2”
Caso contrário e o valor da variável SALARIO1 for MENOR
que o valor da variável SALARIO2, então escrever, conforme.
Caso contrário, escrever: “Os valores são iguais”.*/ 

if ($salario1 > $salario2) {
    echo "O valor do salário 1 é maior que o valor de salario 2 <br><br>";
} else if ($salario2 > $salario1) {
    echo "O valor do salário 2 é maior que o valor de salario 1 <br><br>";
} else  {
    echo "Os valores são iguais <br><br>";
};

#PRATCA 4
/*Utilizando o mesmo programa adaptado na Prática 3,
fazer:
Criar um laço de repetição para ser executado 100 vezes.
A cada iteração deve-se incrementar 1 na variável SALARIO1.
Dentro do laço adicionar uma condição (IF) e quando a
iteração for a 50, deve-se PARAR a execução.
Ao final, fora do loop, escrever o valor de SALARIO1, caso
ele seja menor do que SALARIO2;*/

for ($i = 0; $i <= 100; $i++) {
    ++$salario1;
    if($i === 50) {
        echo "O número é: $salario1 <br><br>";
        break;
    };
    
}

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
    echo "Disciplina " . $disciplinas . ", professor " . $professores[$index] . "<br><br>";
};

#PRATCA 6
/*Declarar uma MATRIZ MULTIDIMENSIONAL que contenha
os seguintes dados:
Percorrer todos os elementos e produzir uma tabela em HTML
para exibir esses dados no navegador.*/

$faculdade = array(array("Matemática",5,8.5), 
array("Português",2,9),
array("Geografia",10,6), 
array("Educação Física",2,158));

echo $faculdade[0][0]." | ".$faculdade[0][1]." | ".$faculdade[0][2]."<br><br>";
echo $faculdade[1][0]." | ".$faculdade[1][1]." | ".$faculdade[1][2]."<br><br>";
echo $faculdade[2][0]." | ".$faculdade[2][1]." | ".$faculdade[2][2]."<br><br>";
echo $faculdade[3][0]." | ".$faculdade[3][1]." | ".$faculdade[3][2]."<br><br>";

?>