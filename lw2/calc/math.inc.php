<?php
require_once "check.inc.php";

function div($arg1, $arg2) {
  return $arg1 / $arg2;
}

function sub($arg1, $arg2) {
  return $arg1 - $arg2;
}

function mul($arg1, $arg2) {
  return $arg1 * $arg2;
}

function add($arg1, $arg2) {
  return $arg1 + $arg2;
}

function calculate($arg1, $arg2, $operation, $errorCode) {
  switch($operation) {
    case "div":
      if($arg2 == 0) {
        $errorCode = ERR_DIV_BY_ZERO;
        return $errorCode;
        break;
      } else {
        return div($arg1, $arg2);
      }
      break;
    case "mul":
      return mul($arg1, $arg2);
      break;
    case "sub":
      return sub($arg1, $arg2);
      break;
    case "add":
      return add($arg1, $arg2);
      break;  
  }
}