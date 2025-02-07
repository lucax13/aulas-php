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
        [
            "id" => 1,
            "nome" => "HTML",
            "descricao" => "Estruturação"
        ],
        [
            "id" => 2,
            "nome" => "CSS",
            "descricao" => "Estilos"
        ],
        [
            "id" => 3,
            "nome" => "JS",
            "descricao" => "Comportamentos"
        ],
        [
            "id" => 4,
            "nome" => "PHP",
            "descricao" => "Back-End"
        ],
        [
            "id" => 5,
            "nome" => "SQL",
            "descricao" => "Manipulação de dados"
        ],
        [
            "id" => 6,
            "nome" => "Java",
            "descricao" => "Softwares"
        ],
    ];
    

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Função</th>
        </tr>
        <?php foreach ($linguagens as $linguagem => $funcao) { ?>
            <tr>
                <td><?=$linguagem["id"]?></td>
                <td><?= $linguagem["nome"] ?></td>
                <td><?= $funcao["descricao"] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>