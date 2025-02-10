<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTMAL e ARRAYS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    /*article{
        display: flex;
        background-color:red;
        color: whitesmoke;
        text-align: center;
        font-size: large;
    }*/
</style>

<body>
    <h1>Dados pessoais</h1>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php

    $pessoa1 = ["luan lima", "01dobaile_@gamil.com senha:01102", "masculino", 19, "tatuape"];
    $pessoa = ["livia luca", "favela_vence@gmail.com senha:02201", "feminino", 22, "sapopemba"];

    ?>

    <article>
        <div>
            <li>Nome: <?= $pessoa1[0] ?></li>
            <li>email: <?= $pessoa1[1] ?></li>
            <li>sexo: <?= $pessoa1[2] ?></li>
            <li>idade: <?= $pessoa1[3] ?></li>
        </div>
    </article>
    <hr>


    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">email:</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pessoa1[1] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
        </div>
    </div>

    <hr>

    <article>
        <div>
            <li>Nome: <?= $pessoa[0] ?></li>
            <li>email: <?= $pessoa[1] ?></li>
            <li>sexo: <?= $pessoa[2] ?></li>
            <li>idade: <?= $pessoa[3] ?></li>
        </div>
    </article>

    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">email:</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $pessoa[1] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
        </div>
    </div>

    <button type="button" class="btn btn-primary">facebook</button>
    <button type="button" class="btn btn-secondary">instagram</button>
    <button type="button" class="btn btn-success">whatsapp</button>
    <button type="button" class="btn btn-danger">youtube</button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>