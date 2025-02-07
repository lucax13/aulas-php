<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Linguagens</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    <h1>Tabela de Linguagens e Suas Funções</h1>
    <hr>
    <?php
    $linguagens = [
        "HTML" => "Estruturação",
        "CSS" => "Estilos",
        "JS" => "Comportamentos",
        "PHP" => "Back-End",
        "SQL" => "Manipulação de Dados",
        "Java" => "Desenvolvimento de Softwares"
    ];
    
    ?>
    <table>
        <tr>
            <th>Linguagem</th>
            <th>Função</th>
        </tr>
        <?php foreach ($linguagens as $linguagem => $funcao) { ?>
            <tr>
                <td><?= $linguagem ?></td>
                <td><?= $funcao ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>