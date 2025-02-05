<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php condicionais</title>
</head>
<style>
    .comprar {
        color: red;
    }

    .urgente {
        color: red;
        background-color: yellow;
    }

    .normal {
        color: green;
    }
</style>

<body>
    <h1>Versão 2 estrutura condicionais</h1>
    <hr>

    <h2>simples usando <code>If</code></h2>

    <?php
    $numero = 5;
    if ($numero > 1) {
    ?>
        <p><?= $numero ?> é maior que 1</p>

    <?php
    }
    ?>

    <hr>
    <h2>composta usando <code>if/else</code></h2>
    <?php
    $produto = "Iphone 13";
    $qtdEmEstoque = 10; //o que temos
    $qtdCritica = 3; // minimo necessario
    ?>

    <h3><?= $produto ?></h3>


    <h4>unidades de estoque: <?= $qtdEmEstoque ?> </h4>

    <?php
    if ($qtdEmEstoque < $qtdCritica) {
    ?>
        <p class=comprar>é necessário comprar!</p>

        <?php
        if ($qtdEmEstoque === 0) {
        ?>
            <p class=urgente><strong>URGENTE</strong></p>
        <?php
        }
        ?>

    <?php
    } else {
    ?>
        <p class=normal> estoque normal</p>

    <?php
    }
    ?>

    <hr>
    <h2>encadeada usando <code>if/else/elseif</code></h2>
    <!--verifique a idade de uma pessoa e determine se ela é criança, adolecente, adulto ou idosa.-->

    <?php
    $idade = 15;
    if ($idade <= 12) {
        $texto = "Criança";
    } elseif ($idade <= 17) {
        $texto = "Adolescente";
    } elseif ($idade <= 59) {
        $texto = "adulto";
    } else {
        $texto = "idoso";
    }
    ?>

    <p><?=$texto?></p>



</body>

</html>