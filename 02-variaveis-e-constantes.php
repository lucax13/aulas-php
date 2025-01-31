<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP manipulação de dados em memoria</title>
</head>
<body>
    <h1>usando variaveis e constantes</h1>
    <hr>

<?php

/*variaveis*/
$curso = "tec. em informatica web";
$ano = 2025; 
$preço = 2500.25;


echo "<h2>saida de dados usando echo na sintaxe completa</h2>";
echo "<p>estamos no curso ".$curso. " no ano letivo de " .$ano. "</p>";

//interpolação aspas duplas
echo "<p>estamos no curso $curso no ano letivo de $ano</p>";



//com aspas simples, interpolação não funciona (vira texto)
echo '<p>estamos no curso $curso no ano letivo de $ano</p>';

?>
    
    <hr>

    <h2>saida de dados usando echo na sintaxe abreviando/curta</h2>
    <p>estamos no curso <b class="cor"> <?=$curso?></b> no ano letivo de <?=$ano?> </p>

    <hr>

<?php
/*constantes*/

//sintaxe 1 (mais antiga): usando a função define()
define("meu_nome", "lucas fernandes lima");

//sintaxe 2 (mais moderna): usando a palavra chave const 
const UNIDADE = "Penha";
?>

    <h2>saida de dados</h2>
    <p>Me chamo <?=meu_nome?> e estou no senac <?=UNIDADE?> </p>
    
    <h2>sintaxe heredoc e nowdoc</h2>
    <p><i>uteis para strings  de multiplas linhas</i></p>

<?php

//exemplo usando heredoc

$nome = "fulano de silva";

$textoheredoc = <<<Texto
<ul>
    <li>nome: $nome</li>
    <li style="color:red">Texto com css</li>
</ul>
Texto;

$comida = "lasanha";

$textonowdoc = <<<'texto'
    ola bem vindo(a) ao php
    estamos testando a sintaxe <b>nowdoc</b>.
    eu adoro $comida.
texto;

?>

    <div>
        <h3>saida com heredoc</h3>
        <?=$textoheredoc?>
    </div>

    <div>
        <h3>saida com nowdoc</h3>
         <?=$textonowdoc?> 
    </div>


</body>
</html>