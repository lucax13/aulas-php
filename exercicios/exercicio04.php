<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Linguagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <style>
        /*body {
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
        }*/
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

    

    <table class="table table-striped-columns">
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Função</th>
        </tr>
        <?php $id = 1; foreach ($linguagens as $linguagem => $funcao) { ?>
            <tr  class="table-active">
                <td class="table-primary"><?=$id?></td>
                <td class="table-secondary"><?= $linguagem ?></td>
                <td class="table-success"><?= $funcao ?></td>
            </tr>
        <?php $id++; } ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"></script>
</body>
</html>