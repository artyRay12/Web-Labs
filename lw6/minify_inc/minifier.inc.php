<?php

function getMinifyCss(&$dataPath) 
{
    $data = file_get_contents($dataPath);
    $data = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $data);
    return $data;
}
    