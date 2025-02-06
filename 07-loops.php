<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops em PHP</title>
</head>
<body>
    <h1>Trabalhando com Loops</h1>
    <hr>

    <h2>While (enquanto)</h2>
    <p>Executa ações <b>enquanto for verdadeiro</b>. se a condição inicialmente
    não for verdadeira, o loop não funciona nenhuma vez.</p>
<?php
$i = 1;
while ($i <= 3){
?>
    <p><?=$i?></p>

<?php
    $i++;
}
?>



    <h2>Do/while (parecido com repita)</h2>
    <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue
    verdadeira, segue fazendo outros ciclos de repetição até a condição se tornar falsa.
    </p>

    <h2>For (para)</h2>
    <p>executa ações por uma <b>quantidade determinada</b>de vezes.</p>




</body>
</html>