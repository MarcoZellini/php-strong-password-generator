<?php
include_once __DIR__ . '/functions.php';

session_start();

if (isset($_GET['pwd_length'])) {
    $_SESSION['password'] = passwordGenerator($_GET['pwd_length']);
}

header('Location: ./result.php');
