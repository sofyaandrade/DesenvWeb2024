<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 3 - Área do Quadrado</title>
    </head>
    <body>
        <h1>Área do Quadrado</h1>
        <form method="post" action="">
            <label for="valor">Digite o tamanho do lado do quadrado em metros:</label>
            <input type="number" name="valor" required><br><br>

            <input type="submit" value="Verificar">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST['valor'];

            $area = $valor ** 2;

            echo "<p>A área do quadrado de lado $valor m é $area m²</p>";
        }
        ?>

    </body>
</html>