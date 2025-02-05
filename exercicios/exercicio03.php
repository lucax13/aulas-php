<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 (condicionais)</title>
</head>

<body>
    <h1>Produtos Disponiveis</h1>
    <hr>

    <?php
    $valor = 7000;

    if ($valor > 5000) {
        $desconto = $valor - $valor *0.15;
    } elseif ($valor > 3000) {
        $desconto = $valor - $valor *0.10;
    } elseif ($valor > 1000) {
        $desconto = $valor - $valor *0.5;
    } else {
        $desconto = 0;
    }
    ?>

    <p>valor sem desconto é: R$
        <?= number_format($valor, 2, ",", ".") ?>
    </p>

    <p>valor final com o desconto é: R$
    <?= number_format($desconto, 2, ",", ".") ?>
    </p>

    <p>foi dado um desconto de:
        <?=$desconto * 100?>% (<?=$desconto - $valor?>)
    </p>

</body>

</html>