<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h1>Trabalhando com Funções</h1>

        <h2>função como procedimento (ou sub-rotina)</h2>
        <p><i>Procedimento <b>Não retornam</b>Nada.</i></p>

        <?php
        function exibirDadosDoAutor()
        {
            echo "<h3>fulano de tal</h3>";
            echo "<p><time>" . date("d/m/Y") . "</time></p>";
        } ?>

        <h3>chamada do procedimento</h3>
        <?= exibirDadosDoAutor() ?>

        <h3>outras chamadas</h3>
        <?php
        $valor = 500;
        if ($valor > 1000) {
            exibirDadosDoAutor();
        }
        ?>
        <div><?= exibirDadosDoAutor() ?></div>
        <ul>
            <li><?= exibirDadosDoAutor() ?></li>
            <li><b><?= exibirDadosDoAutor() ?></b></li>
        </ul>
        <hr>

        <h2>função com parametros (ou argumentos)</h2>
        <?php
        function somar($valor1, $valor2)
        {

            /*variavel de escopo: este tipo de variavel existe somente dentro  da função em que foi declarada.*/
            //$total = $valor1 + $valor2;

            /*retornamos o resultado, ou seja , "mandamos para fora" da função
        o resultado do que ela fez.*/
            //return $total;

            //podemos tambem aplicar o return direto na expressão
            return $valor1 + $valor2;
        }
        ?>

        <p>resultado 1: <?= somar(10, 5) ?></p>
        <p>resultado 2: <?= somar(23, 107) ?></p>

<?php
//chamando a função e guardando o resultado em uma varavel
$resultado3 = somar(2250, 754.96);
?>

        <p>resultado 3: <?=$resultado3?></p>
<?php if($resultado3 > 2000){?>
    <p class="alert alert-sucess">o resultado 3 é maior que 2000</p>
<?php } else{ ?>
    <p class="alert alert-danger">resultado 3 não e maior que 2000</p>
<?php }?>

    <!--usando uma função como parte de uma condição:
    priemiro< a função é chamada (e ai ela calcula e retorna),
    depois o resultado que ela retornou é comparado com a condição-->

<?php if(somar(10, 50) < 500){ ?>
    <p>joão reprovado..</p>
<?php } ?>

    <h3>Função com parâmetros opcionais</h3>
<?php
function exibirSaudacao($mensagem, $pessoa = ""){
    return "Olá, $mensagem $pessoa";
}
?>

    <p>mensagem 1: <?=exibirSaudacao("Bom dia", "joão")?></p>
    <p>mensagem 2: <?=exibirSaudacao("Boa tarde")?></p>

    <hr>

    <h2>Indução de tipos de dados</h2>

<?php
/*indicando que o parametro deve ser do tipo inteiro e que o retorno da função deve ser do tipo string.*/
function verificarNegativo(int $valor):string {
    if( $valor  < 0){
        return "é negativo";
    } else {
        return "não é negativo";
    }
}
 /* tipos comuns para uso com indução string -> texto/ caracteres em geral 
 int -> numeros inteiros
 float -> números com casas decimais
 array -> vetor/matriz 
 object -> objeto*/
?>
   
    <p>Número 10: <?=verificarNegativo(10)?></p>
    <p>Número -10: <span class="badge text-bg-danger"><?=verificarNegativo(-10)?></span></p>

<!--o codigo abaixo gera erro relacionando a indução de tipos -->
    <!--<p>Teste de valor/parametro errado: <?=verificarNegativo("Paulo henrique")?></p>-->
  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>