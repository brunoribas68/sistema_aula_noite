<?php
require 'conexao.php';

$stmt = $conn->prepare('SELECT id,nome,idade,sexo FROM alunos_senai_noite');
$stmt->execute();

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <title>Bootstrap demo</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" >
            <img id="logoMenu" src="image/logo.avif">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="listar.html">Listar</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a href="./index.html">
                    Sair
                </a>
            </span>
        </div>
    </div>
</nav>
<div class="container">
    <div class="table-responsive">
        <table class="table">
            <caption>Lista de Usuarios</caption>
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Sexo</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach($stmt->fetchAll() as $usuario){
                echo "<tr>
                        <th scope='row'>".$usuario['id']."</th>
                        <td>".$usuario['nome']."</td>
                        <td>".$usuario['idade']."</td>
                        <td>".$usuario['sexo']."</td>
                    </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

