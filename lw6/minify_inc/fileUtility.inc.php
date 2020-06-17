<?php

function getRequiredFileList() {
    return file('minifycss.txt');
}

function getOutputFilePath($fileList)
{
    $arr = preg_split('//u', $fileList[0], -1, PREG_SPLIT_NO_EMPTY);
    unset($arr[count($arr) - 1]);
    $filePath = WEB_FOLDER . '/' . OUTPUT_FILES_DIR_NAME . '/' . join($arr);
    return $filePath;
}

function getInputFilePath($fileList)
{
    unset($fileList[0]);
    foreach ($fileList as &$value) {
        $arr = preg_split('//u', $value, -1, PREG_SPLIT_NO_EMPTY);
        unset($arr[count($arr) - 1]);
        $value = WEB_FOLDER . '/' . INPUT_FILES_DIR_NAME . '/' . join($arr);
    }
    return $fileList;
}

function mergeData(&$dest, $src)
{
    for ($i = 1; $i <= count($src); $i++) {
        $data = file_get_contents(($src[$i]));
        file_put_contents($dest, $data, FILE_APPEND);
    }
}

