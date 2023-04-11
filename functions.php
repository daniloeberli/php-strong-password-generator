<?php

function generatePassword($number)
{

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,.*+#%()[]{}';
    $myArray = [];

    for ($i = 0; $i < $number; $i++) {

        $x = rand(0, strlen($chars) - 1);

        $myArray[] = $chars[$x];
    }
    return implode($myArray); // array to string
}

?>