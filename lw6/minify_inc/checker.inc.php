<?php
CONST WEB_FOLDER = 'web';
CONST INPUT_FILES_DIR_NAME = 'css';
CONST OUTPUT_FILES_DIR_NAME = 'css.min';
CONST FILE_LIST_NAME = 'minifycss.txt';

function isOutputFileExist($filePath)
{
    return file_exists($filePath);
}

function isInputFilesExist($filePath) 
{
   foreach ($filePath as $value) {
        if (!file_exists($value)) {
            return false;
        } 
    }   
    return true;
}

