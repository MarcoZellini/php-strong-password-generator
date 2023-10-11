<?php
include_once __DIR__ . '/functions.php';

session_start();

if (isset($_GET['pwd_length']) && isset($_GET['repetitions'])) {
    $_SESSION['password'] = passwordGenerator($_GET['pwd_length'], $_GET['repetitions']);
}

var_dump($_GET, $_SESSION['password']);

header('Location: ./result.php');
