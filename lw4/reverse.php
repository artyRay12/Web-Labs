<?php
require_once "inc/common.inc.php";

if (!isset($_GET['str'])) {
  echo "Параметр не определен";
  die();
}

if ($_GET['str'] == "") {
  echo "Передана пустая строка";
  die();
}

echo getReverseString($_GET['str']);