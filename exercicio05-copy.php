<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 copia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    </head>
<body>
    <div class="container">
        <h1>Exercicio Funções</h1>
        <hr>

<?php
//$media = calculoMedia($nota1, $nota2, $nota3);
//$situacao = verificarSituacao($media);

$listaAlunos = [
    [
        "nome" => "luan",
        "nota1" => 8,
        "nota2" => 5,
        "nota3" => 0.89
    ],
    [
        "nome" => "lucas",
        "nota1" => 8,
        "nota2" => 10,
        "nota3" => 7
    ],
    [
        "nome" => "pedro",
        "nota1" => 6,
        "nota2" => 5,
        "nota3" => 0.89
    ],
    [
        "nome" => "iago",
        "nota1" => 7.4,
        "nota2" => 5,
        "nota3" => 9
    ],
    [
        "nome" => "luna",
        "nota1" => 3,
        "nota2" => 5,
        "nota3" => 0.9
    ],
];

function calculoMedia(float $valorNota1, float $valorNota2, float $valorNota3):float {
    $resultadoDaMedia = ($valorNota1 + $valorNota2 + $valorNota3) / 3;
    return $resultadoDaMedia;
}

function verificarSituacao(float $valorMedia):string{
    if($valorMedia >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}
?>

<?php foreach( $listaAlunos as $aluno) {
    $media = calculoMedia($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]); 
    $situacao = verificarSituacao($media);   
?>


    <h2> <?=$aluno["nome"]?></h2>
    <p>Media: <b><?=number_format($media, 2, ",")?></b></p>
    <p>Situação:
        <b class="badge text-bg-<?=$media >= 7 ? 'success': 'danger'?>">
            <?=$situacao?>
        </b>
    </p>

<?php } ?>

    </div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"></script>
</body>
</html>