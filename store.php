<?php
function getPassword($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&';
    $randomPassword = '';

    for ($i = 0; $i <  $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomPassword .= $characters[$index];
    }

    return $randomPassword;
}

echo getPassword($passwordLength);
