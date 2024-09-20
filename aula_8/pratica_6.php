<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Faculdade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFF;
            padding: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
        }
        th {
            background-color: #008080;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #E0FFFF;
        }
        td {
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Disciplina</th>
                <th>Aulas</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $faculdade = array(
                array("Matemática", 5, 8.5),
                array("Português", 2, 9),
                array("Geografia", 10, 6),
                array("Educação Física", 2, 158)
            );

            // Exibe cada linha da matriz como uma linha da tabela
            foreach ($faculdade as $disciplina) {
                echo "<tr>";
                echo "<td>{$disciplina[0]}</td>";
                echo "<td>{$disciplina[1]}</td>";
                echo "<td>{$disciplina[2]}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
