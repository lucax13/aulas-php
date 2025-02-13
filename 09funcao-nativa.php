<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP funções nativas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h1>PHP funções nativas</h1>
        <hr>

        <h2>strings</h2>
        <h3><code>trim()</code></h3>
        <p>remove espaço antes e depois de strings</p>
        <?php
        $texto = "  paulo henrique dev paçoca       ";
        $textoSemEspaco = trim($texto);
        ?>
        <pre><?= var_dump($texto) ?></pre>
        <pre><?= var_dump($textoSemEspaco) ?></pre>
        <hr>

        <h3><code>str_replace()</code></h3>
        <p>permite subistituir partes de um strings.</p>
        <?php
        $fraseFeia = "Foda-se palmeiras";
        $fraseBonita = str_replace(["Foda-se", "palmeiras"], ["corinthians", "campeão"], $fraseFeia);
        ?>
        <p><?= $fraseFeia ?></p>
        <p><?= $fraseBonita ?></p>
        <hr>

        <h3><code>explode()</code></h3>
        <p>transformar um string em um array</p>
        <?php
        $textosLiguagens = "html,css,js,php,sql";
        $arrayLiguagens = explode(",", $textosLiguagens);
        ?>

        <pre><?= var_dump($textosLiguagens) ?></pre>
        <pre><?= var_dump($arrayLiguagens) ?></pre>
        <hr>

        <h2>Arrays</h2>
        <h3><code>implode()</code></h3>
        <p>transforma array em string</p>

        <?php
        $arrayBandas = ["nirvana", "slayer", "kiss"];
        $textoBandas = implode("-", $arrayBandas);
        ?>

        <pre><?= var_dump($arrayBandas) ?></pre>
        <pre><?= var_dump($textoBandas) ?></pre>
        <hr>

        <h3><code>extract()</code></h3>
        <p>extrai chaves associativas para variaveis</p>
        <?php
        $aluno = [
            "id" => 1,
            "nome" => "noah gabriel",
            "idade" => 24
        ];

        extract($aluno);
        ?>

        <ul>
            <li>ID: <?= $id ?></li>
            <li>Nome: <?= $nome ?></li>
            <li>idade: <?= $idade ?></li>
        </ul>
        <hr>

        <h3><code>Array_sum()</code></h3>
        <p>Somar valores de um array numerico</p>
        <?php
        $valores = [10, 20, 50, 100, 500];
        $total = array_sum($valores);
        ?>

        <p>soma dos valores do array: <b><?= $total ?></b></p>

        <hr>

        <h3><code>array_unique()</code></h3>
        <p>Retorna um novo array com dados <b>únicos</b></p>
        <?php
        $produtos = ["tv", "computador", "ipad", "iphone"];
        $produtosUnicos = array_unique($produtos);
        ?>

        <pre><?= var_dump($produtos) ?></pre>
        <pre><?= var_dump($produtosUnicos) ?></pre>

        <h2>Numericas</h2>
        <h3><code>min(), max(), round()</code></h3>
        <?php
        //vamos usar a mesma array de valores criando mais acima..
        $valorQualquer = 1259.75;
        ?>

        <p>Menor valor: <?= min($valores) ?></p>
        <p>Maior valor: <?= max($valores) ?></p>
        <p>Arredontamento: <?= round($valorQualquer) ?></p>

        <h2>Filtros</h2>
        <p>Recursos/Funções/constantes de analise e limpeza de dados aplicados atraves das funções
            <code>filter_var()</code> e <code>filter_input()</code>
        </p>

        <h3>validação</h3>
        <?php
        $emailErrado = "tiago.com.br";
        $emailCorreto = "tiago.lima@gmail.com";
        ?>

        <p><?= var_dump(filter_var($emailErrado, FILTER_VALIDATE_EMAIL)) ?></p>
        <p><?= var_dump(filter_var($emailCorreto, FILTER_VALIDATE_EMAIL)) ?></p>

        <h3>sanitização</h3>
        <?php
        $ataqueDeRaqui = "<script>
    document.body.innerHTML = 
    '<h1 style=background:yellow>
        <marquee loop>Sou ráqui💣💣💣!</marquee>
    </h1>'
  </script>";

        //echo $ataqueDeRaqui;

        $ataqueSanitizado = filter_var($ataqueDeRaqui, FILTER_SANITIZE_SPECIAL_CHARS);
        echo $ataqueSanitizado;
        ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>