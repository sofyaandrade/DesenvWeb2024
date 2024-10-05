<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 7 - Cálculo de Juros Maria</title>
    </head>
    <body>
        <h1>Cálculo de Juros Maria</h1>
        <form method="post" action="">
        <label for="avista">Valor do carro à vista (R$):</label>
            <input type="number" name="avista" value="22500.00" step="0.01" readonly><br><br>

            <label for="parcela">Valor de cada parcela (R$):</label>
            <input type="number" name="parcela" value="489.65" step="0.01" readonly><br><br>

            <label for="qtd_parcelas">Número de parcelas:</label>
            <input type="number" name="qtd_parcelas" value="60" readonly><br><br>

            <input type="submit" value="Calcular Juros">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $avista = $_POST['avista'];
            $parcela = $_POST['parcela'];
            $qtd_parcelas = $_POST['qtd_parcelas'];

            $total_financiamento = $parcela * $qtd_parcelas;

            $juros_valor = $total_financiamento - $avista;

            $juros_porcentagem = ($juros_valor/ $avista)* 100;

            echo "<p>Maria vai pagar $juros_valor reais a mais do que o valor à vista. O que dá $juros_porcentagem % à mais de juros</p>";
        }
        ?>

    </body>
</html>
