<?php

function checkParametres()
{
    if ((!isset($_GET['numbers']) || (count($_GET['numbers']) != 1))){
        return false;
    }
    
    $arr = explode(",", $_GET['numbers']);
    
    if (count($arr) == 1) {
        return false;
    }
    
    if (!ctype_digit(join($arr))) {
        return false;
    }
    
    if ($arr[count($arr) - 1] == "") {
        return false;
    }
    return true;
}

function getSortedData($data)
{
    $data = explode(',', $data);
    for ($i = 0; $i < count($data); $i++) {
        $changes = false;
        for ($j = 0; $j < count($data) - 1; $j++) {
            if ($data[$j] > $data[($j + 1)]) {
                $changes = true;
                list($data[$j], $data[($j + 1)]) = array($data[($j + 1)], $data[$j]);
            }
        }
        if (!$changes) {
            return implode(', ', $data);
        }
    }
}