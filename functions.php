<?php

function passwordGenerator(int $length, bool $repetitions)
{

    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+[]{}/\|.:,;\'"`~<>^';
    $password = '';

    if ($repetitions) {
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[rand(0, count(str_split($chars, 1)))];
        }
    } else {
        for ($i = 0; $i < $length; $i++) {

            $tempChar = $chars[rand(0, count(str_split($chars, 1)))];

            if ($tempChar !== substr($password, -1)) {
                $password .= $tempChar;
            } else {
                $i--;
            }
        }
    }

    return $password;
}
