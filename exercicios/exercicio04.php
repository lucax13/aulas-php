<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <h1>loop e estrutura de dados</h1>
    <hr>
<?php
$linguagens = [
    
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => " Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares",
];
?>

<ol>
<?php
foreach($linguagens as $linguagem => $funçao){
?> 
    
    <li>as linguagens <?=$linguagem?> e suas funções <?=$funçao?></li> 

<?php
}
?>
</ol>


</body>
</html>