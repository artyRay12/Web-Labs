<?php
require_once "common.inc.php";

$errorCode = checkCalculatorParametres();
$res = 0;
if ($errorCode == ERR_OK) {
  $res = calculate($_GET['arg1'], $_GET['arg2'], $_GET['operation'], $errorCode);
} 

echo ($errorCode == ERR_OK) ? $res : getErrorMessage($errorCode);
