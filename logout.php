<?php

session_start();
session_destroy();
$usuario = filter_input(INPUT_COOKIE, 'usuario');
unset($usuario);
setcookie('usuario','');
setcookie('mat','');
setcookie('e-mail','');
header('location: index.php');
header('location: index.php');

