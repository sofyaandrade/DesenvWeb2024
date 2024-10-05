<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 6 - Questão sobre compras</title>
    </head>
    <body>
        <h1>Questão sobre compras</h1>
        <form method="post" action="">
            <label for="maca">Preço da Maçã(R$/kg):</label>
            <input type="number" name="maca" required><br><br>
            <label for="qtd_maca">Quantidade da Maçã(kg):</label>
            <input type="number" name="qtd_maca" required><br><br>

            <label for="melancia">Preço da Melancia(R$/kg):</label>
            <input type="number" name="melancia" required><br><br>
            <label for="qtd_melancia">Quantidade da Melancia(kg):</label>
            <input type="number" name="qtd_melancia" required><br><br>

            <label for="laranja">Preço da Laranja(R$/kg):</label>
            <input type="number" name="laranja" required><br><br>
            <label for="qtd_laranja">Quantidade da Laranja(kg):</label>
            <input type="number" name="qtd_laranja" required><br><br>
            
            <label for="repolho">Preço da Repolho(R$/kg):</label>
            <input type="number" name="repolho" required><br><br>
            <label for="qtd_repolho">Quantidade da Repolho(kg):</label>
            <input type="number" name="qtd_repolho" required><br><br>

            <label for="cenoura">Preço da Cenoura(R$/kg):</label>
            <input type="number" name="cenoura" required><br><br>
            <label for="qtd_cenoura">Quantidade da Cenoura(kg):</label>
            <input type="number" name="qtd_cenoura" required><br><br>

            <label for="batata">Preço da Batatinha(R$/kg):</label>
            <input type="number" name="batata" required><br><br>
            <label for="qtd_batata">Quantidade da Batatinha(kg):</label>
            <input type="number" name="qtd_batata" required><br><br>

            <input type="submit" value="Calcular">
        </form>

        <?php
        //tratar para receber valores com virgula
        function somarValores($v1, $v2, $v3) {
            return $v1 + $v2 + $v3;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dinheiro_disponivel = 50.00;
            $preco_maca = $_POST['maca'];
            $qtd_maca = $_POST['qtd_maca'];

            $preco_melancia = $_POST['melancia'];
            $qtd_melancia = $_POST['qtd_melancia'];

            $preco_laranja = $_POST['laranja'];
            $qtd_laranja = $_POST['qtd_laranja'];

            $preco_repolho = $_POST['repolho'];
            $qtd_repolho = $_POST['qtd_repolho'];

            $preco_cenoura = $_POST['cenoura'];
            $qtd_cenoura = $_POST['qtd_cenoura'];

            $preco_batata = $_POST['batata'];
            $qtd_batata = $_POST['qtd_batata'];

            $maca = $preco_maca * $qtd_maca;
            $melancia = $preco_melancia * $qtd_melancia;
            $laranja = $preco_laranja * $qtd_laranja;
            $repolho = $preco_repolho * $qtd_melancia;
            $cenoura = $preco_cenoura * $qtd_cenoura;
            $batata = $preco_batata * $qtd_batata;

            $total = $maca + $melancia + $laranja + $repolho + $cenoura + $batata;
            $valor = $dinheiro_disponivel - $total;
            echo "<h3>Valor total da compra:</h3>";
            if ($total < $dinheiro_disponivel) {
                echo "<p>O valor total da compra será de $total reais.</p>";
                echo "<p style='color: blue;'> Sobrou $valor reais.</p>";
            } else if ( $total > $dinheiro_disponivel) {
                echo "<p>O valor total da compra será de $total R$.</p>";
                echo "<p style='color: red;'> Faltou  $valor reais.</p>";
            } else {
                echo "<p style='color: green;'>O valor total da compra será de $total reais.</p>";
            }
        }
        ?>

    </body>
</html>