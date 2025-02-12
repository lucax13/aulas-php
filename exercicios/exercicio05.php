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
function calculoMedia($valor1, $valor2, $valor3){
    return ($valor1 + $valor2 + $valor3) / 3;
}

$nota1 = 10;
$nota2 = 8;
$nota3 = 3;

$media = calculoMedia($nota1, $nota2, $nota3);

if($media >= 7) { 
?> 
        <p>Sua Nota é: <?=$media?> <span class="badge text-bg-primary">Aprovado</span></p>
<?php
} else { 
?> 
        <p>Sua Nota é: <?=$media?> <span class="badge text-bg-danger">Reprovado</span></p>
<?php 
}
?>

        <hr>

<?php 
function exibeResultado($valor1, $valor2, $valor3){
    $ultimaNota = ($valor1 + $valor2 + $valor3) / 3;

    if($ultimaNota >= 7) {
        $status = "Aprovado";
        $badgeClass = "text-bg-primary";
    } else {
        $status = "Reprovado";
        $badgeClass = "text-bg-danger";
    }

    return "<p>Sua Nota é: $ultimaNota <span class='badge $badgeClass'>$status</span></p>";
}

$resultado = exibeResultado(8, 10, 6);
echo $resultado;
?>

    </div> 
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"></script>
</body>
</html>