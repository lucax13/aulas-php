<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - operadores logicos</title>
</head>
<body>
    <h1>relembrando operadores logicos</h1>
    <hr>

    <h2>&& (E)</h2>

<?php
$media = 9.5;
$faltas = 10;
?>
 
<?php
if($media >= 7 && $faltas <= 10) {
?>
   <p>Aprovado!</p>

<?php
} else{
?>
    <p>Reprovado!</p>

<?php
}
?>


<hr>
    <h2>|| (OU/OR)</h2>
    <p><i>Basta que apenas uma condição seja <b>verdadeira/true</b></i></p>

<?php
$clienteVIP = false;
$temCupom = true;

if($clienteVIP || $temCupom) {
?>
    <p>Desconto aplicado!</p>

<?php
} else {
?>
   <p>Sem Desconto!</p>

 <?php
}
?>

<hr>

    <h2>! (não/not)</h2>
    <p><i>É uma inversão de logica: verdadeiro<b>Falso</b>, Falso vira <b>verdadeira</b></i></p>

<?php
$usuarioLogado = false;

if(!$usuarioLogado){  
?>
    <a href="login.php">Login<a>

<?php
}else{
?>
    <span>Bem vindo ao sistema</span>

<?php
}
?>
<hr>

    <h2>usando os 3 operadores combinados para uma logica mais elaboradora</h2>
<?php

$idade = 16;
$acompanhadoPais = true;
$estaBebado = false;


if($idade >= 18 || $acompanhadoPais  && !$estaBebado) {
?>
    <p>Entrada permitida</p>
<?php
} else {
?>
    <p>Entrada negada!</p>
<?php
}
?>



</body>
</html>