<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - objetos </title>
</head>
<body>
    <h1>Trabalhando com objetos</h1>
    <hr>

<?php
/*criando uma instancia de uma classe generica chamada stdclass (stander class)*/
$usuario = new stdClass(); //instancia ou objeto
?> 

    <h2>analisando a estrutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>



</body>
</html>