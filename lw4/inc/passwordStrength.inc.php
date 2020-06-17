<?php

function getPassStrength($password) 
{   
    $strength = 0;
    $strength += getAllSymbolsStrength($password);
    $strength += getAllDigitsStrength($password);
    $strength += getRegisterStrength($password);
    $strength += getOnlyDigitSymbolStrength($password);
    $strength += getRepeatingCharStrength($password);
    return $strength;
}

function getAllSymbolsStrength($password)
{
    $strength = 4 * strlen($password);
    return $strength;
}

function getAllDigitsStrength($password)
{
    $strength = 0;
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_digit($password[$i])) {
            $strength += 4;
        }
    }
    return $strength;
}

function getRegisterStrength($password)
{
    $strength = 0;
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i]) || ctype_lower($password[$i])) {
            $strength += ((strlen($password) - 1) * 2);
        }
    }
    return $strength;
}

function getOnlyDigitSymbolStrength($password)
{
    $strength = 0;
    if (ctype_digit($password) || ctype_alpha($password)) {
        $strength -= strlen($password);
    }
    return $strength;
}

function getRepeatingCharStrength($password){ 
    $strength = 0;
    $repeatCounter = 0;
    foreach (count_chars($password, 1) as $index => $value) {
        if ($value > 1) {
            $repeatCounter += $value;
        }
    }
    $strength -= $repeatCounter;
    return $strength;
}
