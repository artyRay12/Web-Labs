<?php

require_once "inc/common.inc.php";

if (!isset($_GET['str'])) {
    echo "Invalid paramtres or no parametres";
    die();
}

if ($_GET['str'] == "") {
    echo "Can't extract last char from empty string";
    die();
}

echo getLastChar($_GET['str']);




