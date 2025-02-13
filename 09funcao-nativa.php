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
<pre><?=var_dump($texto)?></pre>
<pre><?=var_dump($textoSemEspaco)?></pre>
<hr>

    <h3><code>str_replace()</code></h3>
    <p>permite subistituir partes de um strings.</p>
<?php
$fraseFeia = "Foda-se palmeiras";
$fraseBonita = str_replace(["Foda-se","palmeiras"],["corinthians","campeão"], $fraseFeia);
?>
    <p><?=$fraseFeia?></p>
    <p><?=$fraseBonita?></p>
    <hr>

    <h3><code>explode()</code></h3>
    <p>transformar um string em um array</p>
<?php
$textosLiguagens = "html,css,js,php,sql";
$arrayLiguagens = explode(",", $textosLiguagens);
?>

    <pre><?=var_dump($textosLiguagens)?></pre>
    <pre><?=var_dump($arrayLiguagens)?></pre>
    <hr>

    <h2>Arrays</h2>
    <h3><code>implode()</code></h3>
    <p>transforma array em string</p>

<?php
$arrayBandas = ["nirvana", "slayer", "kiss"];
$textoBandas = implode("-", $arrayBandas);
?>

    <pre><?=var_dump($arrayBandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"></script>
</body>
</html>