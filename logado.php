<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pr-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/styleLog.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


        <title>Document</title>
    </head>
    <body>
        <div class="content">
            <header class="content-header">
                <h1>Login Militar</h1>
            </header>
            <div class="logout">
                <a href="logout.php"><i class="fas fa-bomb"></i>Sair</a>
            </div>
            <main class="main-content">
                <p>
                    <strong>Nome: </strong><?= $_SESSION['usuario'];?><br>
                    <strong>Matrícula: </strong><?= $_SESSION['mat'];?><br>
                    <strong> E-mail: </strong><?= $_SESSION['e-mail'];?><br>
                </p>
            </main>

            <footer class="content-footer">
                <p> Criado por Kleber Lima </p>
            </footer>


        </div>
    </body>
</html>