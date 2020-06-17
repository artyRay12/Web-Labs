<?php
require_once "inc/string.inc.php";

if (!isset($_GET['str'])) {
  echo "Параметр не определен";
  die();
}

if ($_GET['str'] == "") {
  echo "Передана пустая строка";
  die();
}

echo getStringWithoutLastChar($_GET['str']);
