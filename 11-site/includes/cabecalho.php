<?php 
$pagina = basename($_SERVER["PHP_SELF"]);

switch ($pagina){
    case 'index.php':
        $titulo = "Pagina Inicial";
        break;
    case 'curso.php';
        $titulo = "Treinamentos";
        break;
    case 'duvida.php';
        $titulo = "Dúvidas";
        break;
    case 'contato.php';
        $titulo = "contato";
        break;   
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$titulo?> - Site com PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <header>
            <h1>Site com PHP</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="curso.php">Treinamentos</a>
                <a href="duvida.php">Dúvidas</a>
                <a href="contato.php">Contato</a>
            </nav>
        </header>
        <hr>

        <main>