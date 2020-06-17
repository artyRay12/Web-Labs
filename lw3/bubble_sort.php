<?php
require_once 'inc/common.inc.php';

if (checkParametres()) {
    echo getSortedData($_GET['numbers']);
} else {
    header('Status: 400 Not Found');
}
