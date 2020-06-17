<?php

function countLetters($str)
{
    $str = mb_strtolower($str);
    $arr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    return array_count_values($arr);
}

function getArrayInfo($arr)
{
    $outStr = "";
    foreach ($arr as $i => $value) {
        if ($i == ' ') {
            $outStr .= "''" . ' - ' . $value . "<br />";
        } else {
            $outStr .= $i . ' - ' . $value . "<br />";
        }
    }
    return $outStr;
}