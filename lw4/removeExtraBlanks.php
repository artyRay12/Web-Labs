<?php
header("Content-type: text/plain");
require_once "inc/common.inc.php";

if (count($_GET) != 1) {
  echo "Invalid numbers of parametres";
  die();
}

if (!isset($_GET['text'])) {
  echo "Invalid name of parametres";
  die();
}

if ($_GET['text'] == "") {
  echo "Can't remove extra blanks from empty string";
  die(); 
}

echo getStringWithoutExtraBlanks($_GET['text']);