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

<?php
$j = 1;
do{
?>

    <div>
        <h3>Titulo..</h3>
        <p>Texto qualquer...</p>
    </div>

<?php
    $j++;
} while($j <= 3);
?>

    <h2>For (para)</h2>
    <p>executa ações por uma <b>quantidade determinada</b>de vezes.</p>
<?php
for($i = 1; $i <= 10; $i++ ){
?>

    <p><code>i</code> Vale: <b><?=$i?></b></p>

<?php
}
?>
<hr>

    <h2>Mini-exercício</h2>

<?php
$meses = array(

    "Janeiro", 
    "Fevereiro", 
    "Março", 
    "Abril", 
    "Maio", 
    "Junho", 
    "Julho", 
    "Agosto", 
    "Setembro", 
    "Outubro", 
    "Novembro", 
    "Dezembro",
);
?>


<ol>
<?php
for($a = 0; $a < 12; $a++ ){
?>
    <li><?=$meses[$a]?></li>
<?php
}
?>
</ol>
<hr>

    <h2>FOREACH (para cada)</h2>
    <p>Versão simplificada do loop for e bom de mais facil de usar arrays e objetos.</p>

<?php
$alunos = ["julia","pedro","gabriel"];

foreach( $alunos as $aluno){

?>

    <p>Nome: <?=$aluno?></p>

<?php
}
?>

</body>
</html>