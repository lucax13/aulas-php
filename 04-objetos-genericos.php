<!DOCTYPE html>
<html lang="pt-br">
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

//adicionando propriedades/atributos ao objeto

$usuario -> nome = "mickey mouse";
$usuario -> idade = 19;
$usuario -> email = "miscamusca@gmail.com";
$usuario -> telefone = ["11 965417890"];

?> 

    <h2>analisando a estrutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>
    <hr>

    <h2>saida de dados</h2>
    <p>Nome: <?=$usuario->nome?></p>
    <p>idade: <?=$usuario->idade?> Anos</p>
    <p>Celular: <?=$usuario->telefone[0] ?></p>
    <hr>


<h2>convertendo um objeto em um array associativo</h2> 


<?php

$arrayUsuario = (array) $usuario;
?>
   
   <h3>analisando o array  gerado a partir de um objeto</h3>
   <pre><?=var_dump($arrayUsuario)?></pre>


   <h2>convertendoarray associativo em objeto</h2>

<?php
$aluno = ["nome" => "fulano", "sobrenome" => "da silva"];

$objAluno = (object) $aluno;
?>

    <h3>analisandoo objeto gerado a partir de um array</h3>
    <pre><?=var_dump($objAluno)?></pre>



</body>
</html>