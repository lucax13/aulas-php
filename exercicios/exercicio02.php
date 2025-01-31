<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTMAL e ARRAYS</title>
</head>
<style>
    article{
        display: flex;
        background-color:red;
        color: whitesmoke;
        text-align: center;
        font-size: large;
    }
</style>
<body>
    <h1>Dados pessoais</h1>

   

<?php

$pessoa1 = ["luan lima", "01dobaile_@gamil.com senha:01102", "masculino", 19, "tatuape" ];
$pessoa = ["livia luca", "favela_vence@gmail.com senha:02201", "feminino", 22, "sapopemba"] ;

?> 

 <article>
        <div>
            <li>Nome: <?=$pessoa1[0]?></li>
            <li>email: <?=$pessoa1[1]?></li>
            <li>sexo: <?=$pessoa1[2]?></li>
            <li>idade: <?=$pessoa1[3]?></li>
        </div>
        <hr>
        <div>
            <li>Nome: <?=$pessoa[0]?></li>
            <li>email: <?=$pessoa[1]?></li>
            <li>sexo: <?=$pessoa[2]?></li>
            <li>idade: <?=$pessoa[3]?></li>
        </div>
    </article>



</body>
</html>