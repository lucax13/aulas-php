<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
         .teste{
          color: blue;
          border: solid 4px;
          padding: 4px;
         }
    </style>

</head>
<body>
    <h1>Variáveis ou constantes</h1>    
    <hr>

<?php

//data e hora
date_default_timezone_set("america/Sao_Paulo");

  $data = date("d/m/Y");
  $hora = date("H:i");  
  
  echo $data. " - ". $hora;




  $senac = "rede de ensino senac penha";
  $nome = "lucas";
  //$data = "30/01/2025";
  $curso = "tec enfermagem";
  $horario = 1000;

  $limite = $horario *0.25;

  echo "<p>O aluno $nome </p>";
  echo "<p>esta no curso $curso no dia $data </p>";
  echo "<p>com a carga horaria de $horario com o limite de faltas de $limite</p>";

  echo"<p class=\"teste\">Caixinha</p>";
?>

<hr>

<p>O aluno <?= $nome?> esta no <?= $curso?> que inicia no dia <?= $data?> </p> 
<p>com a carga horaria de <?= $horario?></p> 

<script>
    const exemplo = document.querySelector(".teste");

    exemplo.addEventListener("click", function(){
      alert( "<?php echo $senac; ?>" );

    });
      
  </script>

<hr>

<?php
/* diferenças entre const/ define variaveis*/
//$exemplo = 150;
//echo $exemplo;

//echo "<br></br>";

//constante
//const EXEMPLO = 10;
//echo EXEMPLO;

//EXEMPLO = 200;
//echo EXEMPLO;
?>



</body>
</html>