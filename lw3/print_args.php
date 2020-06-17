<?php
$argsCounter = count($argv) - 1;
if ($argsCounter <= 1) {
  echo "No parameters were specified!";
} else {
  echo "Number of arguments: " . $argsCounter . "\n";
  echo "Arguments: ";
  for ($i == 1; $i <= $argsCounter + 1; $i++) {
    echo $argv[$i] . " ";
  }
}

  