<?php
const CORRECT_NUMBER_OF_PARAMETRES = 1;

//Проверка на количество параметров и правильность параметра
if ((count($_GET) != CORRECT_NUMBER_OF_PARAMETRES) || (!isset($_GET['arr']))){
  header('Status: 400 Not Found');
  die();
}

$inputArray = explode(",", $_GET['arr']);
$length = count($inputArray);

/*С ДОП МАССИВОМ
*
$outArray = [];
$index = 0;
for($i = count($inputArray) - 1; $i >= 0 ; $i--) {
  $outArray[$index] = $inputArray[$i];
  $index++;
}
*/

//БЕЗ ДОП МАССИВА
for($i = $length - 1, $j = 0; $i > $j; $i--, $j++) {
  $temp = $inputArray[$j];
  $inputArray[$j] = $inputArray[$i];
  $inputArray[$i] = $temp;
}


print_r($inputArray);
