<?php

function getFilesSize($dir, &$fileData, $typeOFSize)
{
    $files = array_diff(scandir($dir), array('..', '.'));

    for ($i = 2; $i <= count($files) + 1; $i++) {
        foreach ($fileData as $key => &$value) {
            if (substr_count($files[$i], $value["extension"])) {
                if ($typeOFSize == SIZE) {
                    $value["size"] += filesize($dir . $files[$i]);
                } else {
                    $value["lines"] += sizeOf(file($dir . $files[$i]));
                }
             }
        }   
    }
    return $fileData;
}

function printFilesSize($filesData, $typeOFSize) 
{
    foreach ($filesData as $key => $value) {
        echo $key . " - " . $value[$typeOFSize] . "\n";
    }
}
