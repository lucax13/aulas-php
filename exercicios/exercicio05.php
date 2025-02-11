<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <h1>Exercicio Funções</h1>
        <hr>
<?php
$nota = 10;
$nota1 = 6;
$nota2 = 8;


    $media = ($nota1 + $nota + $nota2) / 3;

    if($media >= 7 ){
?>

        <p>Sua Nota é: <?=$media?> <span class="badge text-bg-primary">Aprovado</span></p>

<?php
} else { ?>
    <p>Sua Nota é: <?=$media?> <span class="badge text-bg-danger">Reprovado</span></p>

<?php } ?>

    <hr>

<?php 
function calculoMedia($nota, $nota1, $nota2){
    return ($nota + $nota1 + $nota2) / 3;
?>

    <p>Sua Media: <?=$media?></p>

<?php
}
?>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"></script>
</body>
</html>