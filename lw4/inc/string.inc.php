<?php 

function getLastChar($str): string
{
    $str = preg_split("//u", $str);
    return $str[count($str) - 2];
}

function getStringWithoutLastChar($str) 
{
    $strWithoutLastChar = "";
    $str = preg_split("//u", $str);
    for($i = 1; $i < count($str) - 2; $i++) {
        $strWithoutLastChar .= $str[$i];
    }
    return $strWithoutLastChar;
}

function getReverseString($str) 
{
    $string = "";
    $str = preg_split("//u", $str);
    for($i = count($str) - 2; $i >= 1; $i--) {
        $string .= $str[$i];
    }
    return $string;
}

function getStringWithoutExtraBlanks($str)
{
    $str = trim($str);
    $str = preg_replace('/\s+/', ' ', $str);
    return $str;
}
