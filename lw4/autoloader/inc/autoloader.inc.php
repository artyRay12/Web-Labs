<?php

function autoloader($dir)
{
    $fileNames = scandir($dir);
    if (!$fileNames) {
        return;
    }

    $fileNames = array_diff($fileNames, array('..', '.'));
    foreach ($fileNames as $name) {
        $filePath = $dir . '/' . $name;
        if (is_dir($filePath)) {
            autoloader($filePath);
        }
        if (stripos($name, '.inc.php')) {
            require_once $filePath;
        }
    }
}

autoloader(__DIR__);
