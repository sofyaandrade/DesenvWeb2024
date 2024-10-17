<?php
# PRÁTICA 4
/*Usando a SUPERGLOBAL $_REQUEST, pede-se
para criar um programa em PHP para:
Receber como parâmetro de QueryString os dados: Valor e
Desconto;
Criar uma function para calcular o valor final;
Retornar ao cliente;
Utilizar os tratamentos de exceção adequados*/
function calculaValorFinal($valor, $desconto) {
    if (!is_numeric($valor) || !is_numeric($desconto)) {
        throw new Exception("Os valores devem ser numéricos.");
    }

    if ($valor < 0 || $desconto < 0 || $desconto > 100) {
        throw new Exception("O valor deve ser positivo e o desconto entre 0% e 100%.");
    }

    $valorFinal = $valor - ($valor * ($desconto / 100));
    return $valorFinal;
}

try {
    if (isset($_REQUEST['Valor']) && isset($_REQUEST['Desconto'])) {
        $valor = $_REQUEST['Valor'];
        $desconto = $_REQUEST['Desconto'];

        if (empty($valor) || empty($desconto)) {
            throw new Exception("Parâmetros 'Valor' e 'Desconto' não podem estar vazios.");
        }

        $valorFinal = calculaValorFinal($valor, $desconto);

        echo "O valor final com desconto é: R$ " . number_format($valorFinal, 2, ',', '.');
    } else {
        throw new Exception("Parâmetros 'Valor' e 'Desconto' não foram passados corretamente.");
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
