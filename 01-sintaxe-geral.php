<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - sintaxe geral</title>
  <style>
    .exemplo{
      color: red;
      border: solid 4px;
      padding: 4px;
    }
  </style>

</head>
<body>
  <h1>trabalhando com php</h1>
  <hr>

  <?php
  //geração de textos
  echo "Hoje o Timão Joga!";

  //geração de tags e atributos
  echo "<p> 1 x 2 </p>";
  echo "<p><abbr title='sport clube corinthians paulista'>SCCP</abbr></p>";

  //aspas duplas fora, aspas simples dentro 
  echo "<p> 1 x 2 </p>";
  echo "<p><abbr title='sport clube corinthians paulista'>SCCP</abbr></p>";


  //aspas duplas/simles dentro e fora (errado)
  // echo "<p> 1 x 2 </p>";
  //echo"<p><abbr title= "sport clube corinthians paulista">SCCP</abbr></p>";

  // aspas usando escape
  echo "<p> 1 x 2 </p>";
  echo "<p><abbr title=\"sport clube corinthians paulista\">SCCP</abbr></p>";

  echo "<h2>Brincando <span class=\"exemplo\">php</span> </h2>";

    $saudacao = "ola!";

  ?>

  <script>
    const exemplo = document.querySelector(".exemplo");

    exemplo.addEventListener("click", function(){
      alert( "<?php echo $saudacao; ?>" );

    });
      
  </script>



</body>
</html>