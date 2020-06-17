<?php
$correctNumbersOfParametres = 2;
if (count($argv) != $correctNumbersOfParametres) {
    echo "Incorrect number of arguments!";
    die();
}

echo join(array_unique(preg_split("//u", array_pop($argv))));

