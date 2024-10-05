<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 4 - Área do Retângulo</title>
    </head>
    <body>
        <h1>Área do Retângulo</h1>
        <form method="post" action="">
            <label for="base">Insira o valor da base: </label>
            <input type="number" name="base" required><br><br>

            <label for="altura">Insirada a altura</label>
            <input type="number" name="altura" required><br><br>

            <input type="submit" value="Verificar">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST['base'];
            $altura = $_POST['altura'];

            $area = $base * $altura;

            if ($area <= 10) {
                echo "<h3>A área do retângulo de lados de $base m e $altura m é de $area m²</h3>";
            } else {
                echo "<h1>A área do retângulo de lados de $base m e $altura m é de $area m²</h1>";
            }
        
        }
        ?>

    </body>
</html>