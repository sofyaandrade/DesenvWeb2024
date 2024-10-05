<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 2 - Verificar Divisibilidade</title>
    </head>
    <body>
        <h1>Verificar Divisibilidade pelo número 2</h1>
        <form method="post" action="">
            <label for="numero">Digite o número:</label>
            <input type="number" name="numero" required><br><br>

            <input type="submit" value="Verificar">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            if ($numero % 2 == 0) {
                echo "<p>O número $numero é divisível por 2</p>";
            } else {
                echo "<p>O número $numero não é divisível por 2</p>";
            }
        }
        ?>

    </body>
</html>