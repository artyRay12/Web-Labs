<?php 
require_once "minify_inc/comon.inc.php";

$requiredFileList = FILE_LIST_NAME;

if (file_exists($requiredFileList)) {
    $outputFilePath = getOutputFilePath(getRequiredFileList());
    $inputFilePath = getInputFilePath(getRequiredFileList());
}

if (!isOutputFileExist($outputFilePath)) {
    die();
}

if (!isInputFilesExist($inputFilePath)) {
    die();
}

mergeData($outputFilePath, $inputFilePath);
file_put_contents($outputFilePath, getMinifyCss($outputFilePath));

