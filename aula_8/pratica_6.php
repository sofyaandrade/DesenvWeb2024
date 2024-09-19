<?php
#PRATCA 6
/*Declarar uma MATRIZ MULTIDIMENSIONAL que contenha os dados da tabela do slide.
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