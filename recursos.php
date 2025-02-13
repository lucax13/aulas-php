<?php
define("escola", "senac"); //constante
$curso = "tec. informatica web"; //variavel
$tecnologias = ["HTML", "CSS", "JS"]; //array

//função
function verificarIdade(int $valorDaIdade):string {
    return $valorDaIdade >= 18 ? "maior" : "menor";
}
