<?php

const ERR_OK = 0;
const ERR_LETTER_AFTER_DIGIT = 1;
const ERR_UNKNOWN_SYMBOL = 2;
const ERR_FIRST_SYMBOL_IS_NOT_LETTER= 3;
const ERR_WRONG_NUMBERS_PARAMETRES = 4;
const ERR_WRONG_NAME_OF_PARAMETRES = 5;
const ERR_STRING_IS_EMPTY = 6;
const NUMBER_OF_PARAMETRES = 1;

function checkParamatres(&$checkData)
{
    if (count($_GET) != NUMBER_OF_PARAMETRES) {
        $checkData['errorCode'] = ERR_WRONG_NUMBERS_PARAMETRES; 
        return $checkData;
    }

    if (!isset($_GET['identifier'])) {
        $checkData['errorCode'] = ERR_WRONG_NAME_OF_PARAMETRES;
        return $checkData;
    }

    if ($_GET['identifier'] == "") {
        $checkData['errorCode'] = ERR_STRING_IS_EMPTY;
        return $checkData;
    }
}

function checkIdentifier(&$checkData) 
{
    $digitFounded = false;
    $identifier = $_GET['identifier'];

    if (!ctype_alnum($identifier)) {
        $checkData['errorCode'] = ERR_UNKNOWN_SYMBOL;
        return $checkData;      
    }

    for ($i = 0; $i < strlen($identifier); $i++) {
        if (is_numeric($identifier[0])) {
            $checkData['index'] = $i;
            $checkData['symbol'] = $identifier[$i];
            $checkData['errorCode'] = ERR_FIRST_SYMBOL_IS_NOT_LETTER;
            break;
        }

        if (is_numeric($identifier[$i])) {
            $digitFounded = true;
        }

        if (ctype_alpha($identifier[$i]) && ($digitFounded == true)) {
            $checkData['index'] = $i;
            $checkData['symbol'] = $identifier[$i];
            $checkData['errorCode'] = ERR_LETTER_AFTER_DIGIT;
            break;
        }
    }
    return $checkData;
}

function printCheckMessage($checkData) 
{
    $messages = [
        ERR_OK => "Yes",
        ERR_WRONG_NAME_OF_PARAMETRES => "No! Не верное имя параметра",
        ERR_WRONG_NUMBERS_PARAMETRES => "No! Не верное количество параметров",
        ERR_LETTER_AFTER_DIGIT => "No! Встречена буква " . '"' . $checkData['symbol'] . '"'. " после цифры", 
        ERR_FIRST_SYMBOL_IS_NOT_LETTER => "No! Недопустимый первый символ " . '"' . $checkData['symbol'] . '"',
        ERR_UNKNOWN_SYMBOL => "No!" . " Встречены неизвестные символы",
        ERR_STRING_IS_EMPTY => "No! Empty string can't be checked"
    ]; 
    return $messages[$checkData['errorCode']];
}


