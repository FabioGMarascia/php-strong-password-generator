<?php

function getPassword($length)
{
    $dictionary = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&';
    $charactersAndNumbers = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersAndSymbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&';
    $numbersAndSymbols = '0123456789!@#$%&';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%&';
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {


        if (isset($_GET["characters"]) && isset($_GET["numbers"])) {

            if (isset($_GET["repetition"])) {
                $index = rand(0, strlen($charactersAndNumbers) - 1);
                if (strpbrk($randomPassword, $charactersAndNumbers[$index]) == false) {
                    $randomPassword .= $charactersAndNumbers[$index];
                } else {
                    $length++;
                }
            } else {
                $index = rand(0, strlen($charactersAndNumbers) - 1);
                $randomPassword .= $charactersAndNumbers[$index];
            }
        } elseif (isset($_GET["characters"]) && isset($_GET["symbols"])) {

            if (isset($_GET["repetition"])) {
                $index = rand(0, strlen($charactersAndNumbers) - 1);
                if (strpbrk($randomPassword, $charactersAndNumbers[$index]) == false) {
                    $randomPassword .= $charactersAndSymbols[$index];
                } else {
                    $length++;
                }
            } else {
                $index = rand(0, strlen($charactersAndSymbols) - 1);
                $randomPassword .= $charactersAndSymbols[$index];
            }
        } elseif (isset($_GET["numbers"]) && isset($_GET["symbols"])) {

            if (isset($_GET["repetition"])) {
                $index = rand(0, strlen($charactersAndNumbers) - 1);
                if (strpbrk($randomPassword, $charactersAndNumbers[$index]) == false) {
                    $randomPassword .= $numbersAndSymbols[$index];
                } else {
                    $length++;
                }
            } else {
                $index = rand(0, strlen($numbersAndSymbols) - 1);
                $randomPassword .= $numbersAndSymbols[$index];
            }
        } elseif (isset($_GET["characters"])) {

            if (isset($_GET["repetition"])) {
                $index = rand(0, strlen($characters) - 1);
                if (strpbrk($randomPassword, $characters[$index]) == false) {
                    $randomPassword .= $characters[$index];
                } else {
                    $length++;
                }
            } else {
                $index = rand(0, strlen($characters) - 1);
                $randomPassword .= $characters[$index];
            }
        } elseif (isset($_GET["numbers"])) {

            if (isset($_GET["repetition"])) {
                $index = rand(0, strlen($numbers) - 1);
                if (strpbrk($randomPassword, $numbers[$index]) == false) {
                    $randomPassword .= $numbers[$index];
                } else {
                    $length++;
                }
            } else {
                $index = rand(0, strlen($numbers) - 1);
                $randomPassword .= $numbers[$index];
            }
        } elseif (isset($_GET["symbols"])) {

            if (isset($_GET["repetition"])) {
                $index = rand(0, strlen($symbols) - 1);
                if (strpbrk($randomPassword, $symbols[$index]) == false) {
                    $randomPassword .= $symbols[$index];
                } else {
                    $length++;
                }
            } else {
                $index = rand(0, strlen($symbols) - 1);
                $randomPassword .= $symbols[$index];
            }
        } else {
            if (isset($_GET["repetition"])) {
                $index = rand(0, strlen($dictionary) - 1);
                if (strpbrk($randomPassword, $dictionary[$index]) == false) {
                    $randomPassword .= $dictionary[$index];
                } else {
                    $length++;
                }
            } else {
                $index = rand(0, strlen($dictionary) - 1);
                $randomPassword .= $dictionary[$index];
            }
        }
    }

    return $randomPassword;
}

echo getPassword($passwordLength);
