<?php
require "inc/common.inc.php";

const CURRENT_NUMBER_OF_PARAMETRES = 3;
const LINES = "lines";
CONST SIZE = "size";


if ($argc != CURRENT_NUMBER_OF_PARAMETRES) {
    echo "Incorrect number of arguments!";
    die();
}

if (!file_exists($argv[1])) {
    echo "Путь указан не верно";
    die();
}


$fileData = [
    "PHP" => ["extension" => ".php",
              "size" => "0",
              "lines" => "0"
             ],
    "TWIG" => ["extension" => ".html.twig",
               "size" => "0",
               "lines" => "0"
              ],
    "JS" => ["extension" => ".js",
             "size" => "0",
             "lines" => "0"
            ],
    "CSS" => ["extension" => ".css",
              "size" => "0",
              "lines" => "0"
             ],
];

$dir = $argv[1];
$typeOfSize = $argv[2];

getFilesSize($dir, $fileData, $typeOfSize);
printFilesSize($fileData, $typeOfSize);


