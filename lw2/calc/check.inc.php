<?php
const ERR_OK = 0;
const ERR_NOT_DEFINED_PARAMETRES = 1;
const ERR_WRONG_NUMBERS_PARAMETRES = 2;
const ERR_WRONG_NAMES_OF_PARAMETRES = 3;
const ERR_ARGS_NOT_NUMERIC = 4;
const ERR_INVALID_OPERATION = 5;
const ERR_DIV_BY_ZERO = 6;
const CORRECT_NUMBER_OF_PARAMETRES = 3;
const correctOperations = array(1 => "div",
                                2 => "mul",
                                3 => "sub",
                                4 => "add");

function checkCalculatorParametres() {
  $errorCode = ERR_OK;
  //Проверка что параметры переданны
  if (count($_GET) == 0) {
    $errorCode = ERR_NOT_DEFINED_PARAMETRES; 
    return $errorCode;
  }

  //Проверка на количество параметров
  if (count($_GET) != CORRECT_NUMBER_OF_PARAMETRES) {
    $errorCode = ERR_WRONG_NUMBERS_PARAMETRES;
    return $errorCode;
  }

  //Проверка на верное имя параметров
  if (isset($_GET['arg1']) && isset($_GET['arg2']) && isset($_GET['operation'])) {
  } else {
    $errorCode = ERR_WRONG_NAMES_OF_PARAMETRES;
    return $errorCode;
  }

  //Проверка что, были переданны цифры  
  $arg1 = $_GET['arg1'];
  $arg2 = $_GET['arg2'];
  if ((is_numeric($arg1) == true) && (is_numeric($arg2) == true)) {
  } else {
    $errorCode = ERR_ARGS_NOT_NUMERIC;
    return $errorCode;
  }

  //Проверка на верную операцию
  $validOperation = false;
  $operation = $_GET['operation'];
  foreach (correctOperations as $value) {
    if ($operation == $value) {
      $validOperation = true;
    }
  } 

  if ($validOperation == false) {
    $errorCode = ERR_INVALID_OPERATION;
    return $errorCode;
  }

  //Деление на ноль
  if ($operation == "div" && $arg2 == 0)  {
    $errorCode = ERR_DIV_BY_ZERO;
  }
  return $errorCode;
}

function getErrorMessage($errorCode) {
  $messages = [
    ERR_NOT_DEFINED_PARAMETRES => 'Not defined parametres',
    ERR_WRONG_NUMBERS_PARAMETRES => 'Wrong numbers of parametres',
    ERR_WRONG_NAMES_OF_PARAMETRES => 'Wrong name of parametres',
    ERR_ARGS_NOT_NUMERIC => 'Args are not numbers',
    ERR_INVALID_OPERATION => 'Invalid operation',
    ERR_DIV_BY_ZERO => 'You cant div by zero'];
  return $messages[$errorCode];
}