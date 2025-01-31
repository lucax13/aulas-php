<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP arrays</title>
</head>
<body>
    <h1>Trablhando com arrays </h1>
    <hr>

    <h2>Arrays numericas/indexados</h2>

<?php
//sintaxe com colchetes
$banda = ["savatege", "rush", "slayer","bon jovi"];

//sintaxe com função array()
$curso = array("HTML5", "node.js", "php", "sql");

$comida[0] = "bolinho de carne";
$comida[1] = "batata";
$comida[2] = "pizza";

//constantes de array
define("UNIDADE", ["penha", "tatuape"]);
const FRUTA = ["morango", "limao"];
?>

<h3>Acessando os dados</h3>
<ul>
    <li>banda favorita: <?=$banda[1]?></li>
    <li>lançamento de curso de <?=$curso[2]?></li>
    <li>quero comer <?=$comida[2]?></li>
    <li>estamos no senac <?=UNIDADE[1]?></li>
    <li>vou fazer um drink de <?=FRUTA[0]?></li>
</ul>

<h2>Arrays associativas</h2>
<?php
$curso = [
    "titulo" => "Construção",
    "carga_horaria" => 200,
    "descricao" => "aprender a subir uma parede.."
];
?>

<h3>acessando dados</h3>
<p>Nome do curso: <?=$curso["titulo"]?> </p>
<p>carga horaria: <?=$curso["carga_horaria"]?> horas.</p>
<p>Descrição: <?=$curso["descricao"]?> </p>

<?php
define("EMPRESA",[
    "nome" => "NIKE Vestimentos",
    "ano_fundacao" => 2021
]);

echo EMPRESA["nome"];
echo "<br></br>";

const OUTRA_EMPRESA = ["nome" => "ABC TI", "ano_fundacao" => 2022];
echo OUTRA_EMPRESA["nome"];
?>

<h2>Matriz (array dentro de array)</h2>

<?php
$planodeEstudos = [
    ["JS avançado", "node.js", "Next.js"],
    ["PHP", "orientação e objetos"],
    ["teoria das cores", "photoshop", "UX/UI", "Motion Desing"]
];
?>

<h3>Acessando os dados</h3>
<p>vou estudar nos proximos meses:
    <?=$planodeEstudos[0][2]?>, <?=$planodeEstudos[1][0]?> e
    <?=$planodeEstudos[2][3]?>
</p>
<hr>

<h2>funções de analise/depuração/debug de estruturas de dados</h2>

<h3><code>print_r()</code></h3>
<pre><?=print_r($banda)?></pre>

<h3><code>var_dump()</code></h3>
<pre><?=var_dump($banda)?></pre>
<pre><?=var_dump($curso)?></pre>


</body>
</html>
