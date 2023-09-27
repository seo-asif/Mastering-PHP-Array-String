<?php
function generatePassword($length)
{
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $number = '0123456789';
    $specialChars = '!@#$%^&*()';
    $password = '';

    // Ensure at least one lowercase, one uppercase,one,number , one symbol character
    $password .= $lowercaseChars[rand(0, strlen($lowercaseChars) - 1)];
    $password .= $uppercaseChars[rand(0, strlen($uppercaseChars) - 1)];
    $password .= $number[rand(0, strlen($number) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    $passwordString = $lowercaseChars . $uppercaseChars .$number. $specialChars;
    $passLength = strlen($passwordString) - 1;

    // Generate the remaining characters of the password
    // subtract 4 from length beacuase of adding 4 more in $password
    for ($i = 0; $i < $length - 4; $i++) {
        $password .= $passwordString[rand(0, $passLength)];
    }

    // Shuffle the password to randomize character positions
    $password = str_shuffle($password);
    echo $password;
}


generatePassword(12);



