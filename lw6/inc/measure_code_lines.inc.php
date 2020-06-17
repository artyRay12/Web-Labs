<?php

function getFilesSize($dir, &$fileData)
{
    $files = array_diff(scandir($dir), array('..', '.'));

    for ($i = 2; $i <= count($files) + 1; $i++) {
        foreach ($fileData as $key => &$value) {
            if (substr_count($files[$i], $value["extension"])) {
                echo $value["lines"];
                $value["lines"] += sizeof(file($dir . $files[$i]));
            }
        }   
    }
    return $fileData;
}

function printFilesSize($filesData) 
{
    foreach ($filesData as $key => $value) {
        echo $key . " - " . $value["lines"] . "\n";
    }
}