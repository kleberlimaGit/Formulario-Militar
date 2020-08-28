<?php
$testCookie = filter_input(INPUT_COOKIE, 'usuario');
if (isset($testCookie)) {
    $_SESSION['usuario'] = filter_input(INPUT_COOKIE, 'usuario');
    $_SESSION['mat'] = filter_input(INPUT_COOKIE, 'mat');
    $_SESSION['e-mail'] = filter_input(INPUT_COOKIE, 'e-mail');
    header('Location: logado.php');
}