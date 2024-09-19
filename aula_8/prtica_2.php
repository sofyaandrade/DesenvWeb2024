<?php
#PRATICA 2
/*Declarar duas variáveis com os nomes: SALARIO1 e
SALARIO2;
Atribuir 1000 para a variável SALARIO1;
Atribuir 2000 para a variável SALARIO2;
Atribuir o valor da variável SALARIO1 para SALARIO2
Incrementar 1 na variável SALARIO2;
Adicionar 10% de aumento para SALARIO1;
Produzir uma saída com o texto: “Valor Salário 1: XX e Valor
Salário: XX”;*/

$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
++$salario2;
$salario1 = $salario1 * 1.1;

echo 'O valor do salário 1 é '. $salario1 ."  e o valor de salario 2 é $salario2 <br>" ;

#PRATCA 3
#se for aspas simples pecisa concatenar, se for duplas não precisa
/*Utilizando o mesmo programa criado na Prática 2, fazer:
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
/*Utilizando o mesmo programa adaptado na Prática 3, fazer:
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
?>