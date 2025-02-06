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

if($media >= 7 && $faltas <= 10) {
    echo "<p>Aprovado!</p>";
} else{
    echo "<p>Reprovado!</p>";
}
?>




    <h2>|| (OU/OR)</h2>

    <h2>! (não/not)</h2>
    
</body>
</html>