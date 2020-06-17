<?php

include ("inc/common.inc.php");

if (count($_GET) != 1) {
    echo "Invalid numbers of parametres";
    die();
  }
  
  if (!isset($_GET['password'])) {
    echo "Invalid name of parametres";
    die();
  }
  
  if ($_GET['password'] == "") {
    echo "Can't count password strength from empty string";
    die(); 
  }

if (ctype_alnum($_GET['password'])) {
    echo(getPassStrength($_GET['password']));
} else {
    echo("Недопустимые символы в пароле");
}