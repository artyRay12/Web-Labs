<?php

require_once "inc/common.inc.php";

$checkData = [
    'index' => '',
    'symbol' => '',
    'errorCode' => ERR_OK
];

checkParamatres($checkData);
if ($checkData['errorCode'] == ERR_OK) {    
    checkIdentifier($checkData);
}
echo printCheckMessage($checkData);




