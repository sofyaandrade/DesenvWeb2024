<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 9 - Parcelamento da Moto do Juquinha - Juros Compostos</title>
    </head>
    <body>
        <h1>Cálculo das Parcelas com Juros Compostos</h1>

        <?php
        $a_vista = 8654.00;
        $taxa_inicial = 2 / 100;
        $incremento_juros = 0.3 / 100;

        $parcelas_opcoes = [
            24 => $taxa_inicial,
            36 => $taxa_inicial + $incremento_juros,
            48 => $taxa_inicial + 2 * $incremento_juros,
            60 => $taxa_inicial + 3 * $incremento_juros
        ];

        echo "<h2>Valor à vista da moto: R$ $a_vista</h2>";

        foreach ($parcelas_opcoes as $num_parcelas => $taxa_juros) {
            $montante = $a_vista * pow((1 + $taxa_juros), $num_parcelas);
            
            $valor_parcela = $montante / $num_parcelas;

        
            echo "<p>Parcelamento em $num_parcelas vezes: R$ " . number_format($valor_parcela, 2, ',', '.') . " por parcela (Juros de " . ($taxa_juros * 100) . "%)</p>";
        }
        ?>
    </body>
</html>
