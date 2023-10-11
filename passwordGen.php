<?php
include_once __DIR__ . '/functions.php';

session_start();

!isset($_GET['letters']) ? $_GET['letters'] = 0 : '';
!isset($_GET['numbers']) ? $_GET['numbers'] = 0 : '';
!isset($_GET['symbols']) ? $_GET['symbols'] = 0 : '';


if (
    isset($_GET['pwd_length'])
    && !empty($_GET['pwd_length'])
    && isset($_GET['repetitions'])
) {
    $_SESSION['password'] = passwordGenerator($_GET['pwd_length'], $_GET['repetitions'], $_GET['letters'], $_GET['symbols'], $_GET['numbers']);

    $_SESSION['password'] === -1 ? $_SESSION['password'] = "Non e' stato possibile generare la password. Parametri non inseriti correttamente." : '';
}

var_dump($_GET, $_SESSION['password']);

header('Location: ./result.php');
