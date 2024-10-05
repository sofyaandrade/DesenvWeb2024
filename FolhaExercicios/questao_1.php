<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 1 - Soma de Três Valores</title>
    </head>
    <body>
        <h1>Soma de Três Valores</h1>
        <form method="post" action="">
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" required><br><br>

            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" required><br><br>

            <label for="num3">Digite o terceiro número:</label>
            <input type="number" name="num3" required><br><br>

            <input type="submit" value="Calcular">
        </form>

        <?php
        function somarValores($v1, $v2, $v3) {
            return $v1 + $v2 + $v3;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            $soma = somarValores($num1, $num2, $num3);

            if ($num1 > 10) {
                echo "<p style='color: blue;'>O resultado da soma é: $soma</p>";
            } else if ($num2 < $num3) {
                echo "<p style='color: green;'>O resultado da soma é: $soma</p>";
            } else if ($num3 < $num1 && $num3 < $num2) {
                echo "<p style='color: red;'>O resultado da soma é: $soma</p>";
            } else {
                echo "<p>O resultado da soma é: $soma</p>";
            }
        }
        ?>

    </body>
</html>
