<?php

function passwordGenerator(int $length)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+[]{}/\|.:,;\'"`~<>^';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, count(str_split($chars, 1)))];
    }

    return $password;
}
