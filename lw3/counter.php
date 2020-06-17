<?php
require_once "inc/common.inc.php";

const CORRECT_NUMBER_OF_PARAMETRES = 1;

if ((count($_GET) != CORRECT_NUMBER_OF_PARAMETRES) || (!isset($_GET['string']))){
  header('Status: 400 Not Found');
  die();
}

if ($_GET['string'] == '') {
  header('Status: 400 Not Found');
  die();

}

echo getArrayInfo(countLetters($_GET['string']));