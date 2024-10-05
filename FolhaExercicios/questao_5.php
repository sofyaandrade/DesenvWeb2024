<!DOCTYPE html>
<html>
    <head>
        <title>Exercício 5 - Área do Triângulo Retângulo</title>
    </head>
    <body>
        <h1>Área do Triângulo Retângulo</h1>
        <form method="post" action="">
            <label for="base">Insira o valor da base: </label>
            <input type="number" name="base" required><br><br>

            <label for="altura">Insira a altura</label>
            <input type="number" name="altura" required><br><br>

            <input type="submit" value="Verificar">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST['base'];
            $altura = $_POST['altura'];

            $area = ($base * $altura)/2;
            
            echo "<p>A área do triângulo retângulo com a base de $base m e a altura de $altura m é de $area m²</p>";
        
        }
        ?>

    </body>
</html>