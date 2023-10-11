<?php

function passwordGenerator(int $length, bool $repetitions, bool $letters, bool $symbols, bool $numbers)
{

    $lettersList = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbolsList = '!@#$%^&*()-_=+[]{}/\|.:,;\'"`~<>^';
    $numbersList = '0123456789';
    $chars = '';
    $password = '';


    if (isset($length)) {

        if ($letters) {
            $chars .= $lettersList;
        }
        if ($symbols) {
            $chars .= $symbolsList;
        }
        if ($numbers) {
            $chars .= $numbersList;
        }

        if (!empty($chars)) {

            if ($repetitions) {
                for ($i = 0; $i < $length; $i++) {
                    $password .= $chars[rand(0, strlen($chars) - 1)];
                }
            } else {
                for ($i = 0; $i < $length; $i++) {

                    $tempChar = $chars[rand(0, strlen($chars) - 1)];

                    if ($tempChar !== substr($password, -1)) {
                        $password .= $tempChar;
                    } else {
                        $i--;
                    }
                }
            }
        } else {
            $password = -1;
        }
    } else {
        $password = -1;
    }

    return $password;
}
