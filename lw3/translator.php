<?php
const CORRECT_NUMBER_OF_PARAMETRES = 1;
const WORDS = [
  "cat" => "кошка",
  "dog" => "собака",
  "sky" => "небо"
];

//Проверка на количество параметров и правильность параметра
if ((count($_GET) != CORRECT_NUMBER_OF_PARAMETRES) || (!isset($_GET['word']))){
  header('Status: 400 Not Found');
  die();
}

if (array_key_exists($_GET['word'], WORDS)) {
  echo WORDS[$_GET['word']];
} else {
  header('Status: 404 Not Found');
}
