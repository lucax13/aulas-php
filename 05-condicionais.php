<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php condicionais</title>
</head>
<style>
    .comprar{color: red;}
    .urgente{color: red; background-color: yellow;}
    .normal{color: green;}

</style>
<body>
    <h1>estrutura condicionais</h1>
    <hr>

    <h2>simples</h2>
    <h3><code></code></h3>
 
<?php
$numero = 5;
if($numero > 1){
    echo "<p>$numero é maior que 1</p>";
}

if($numero > 1) echo "<p>$numero é maior que 1</p>";

?>    

    <h2>composta</h2>
<?php
$produto = "Iphone 13";
$qtdEmEstoque = 10; //o que temos
$qtdCritica = 3; // minimo necessario
 
 echo "<h3>$produto</h3>";
 echo"<h4>unidades de estoque: $qtdEmEstoque </h4>";

 if($qtdEmEstoque < $qtdCritica){
    echo"<p class= comprar>é necessário comprar!</p>";

    if($qtdEmEstoque === 0){
     echo "<p class = urgente><strong>URGENTE</strong></p>"  ; 
    }

 } else{
    echo "<p class=\"normal\">estoque normal</p>";
 }

?>




<hr>
    <h2>encadeada</h2>

</body>
</html>