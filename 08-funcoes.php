<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <h1>Trabalhando com Funções</h1>

        <h2>função como procedimento (ou sub-rotina)</h2>
        <p><i>Procedimento <b>Não retornam</b>Nada.</i></p>

<?php
function exibirDadosDoAutor(){
    echo "<h3>fulano de tal</h3>";
    echo "<p><time>".date("d/m/Y")."</time></p>";
}?>

    <h3>chamada do procedimento</h3>
    <div><?= exibirDadosDoAutor()?></div>
        <hr>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"></script>
</body>
</html>