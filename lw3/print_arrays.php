<?php
$primeNumbers = array();
$index = 0;
for($i = 2; $i <= 100; $i++) {
  $isPrime = true;
  for($j = 2; $j < $i; $j++) {
    if ($i % $j == 0) {
      $isPrime = false;
      break;
    }
  }
  if($isPrime == true) {
    $primeNumbers[$index] = $i;
    $index++;
  }
  if(count($primeNumbers) == 10) {
    break;
  }
}
print_r($primeNumbers);

$functionsGuide = array(  
  "count" => "Считает кол-во элементов в массиве",
  "is_array" => "Проверяет, присутствует ли в массиве значение",
  "array_merge" => "Слить два или большее количество массивов",
  "empty" => "Проверяет, считается ли переменная пустой",
  "print_r" => "Печатает читабельную информацию о переменной"
);

print_r($functionsGuide);

$matrix = array(
  array('1', '0', '0', '0'),
  array('0', '1', '0', '0'),
  array('0', '0', '1', '0'),
  array('0', '0', '0', '1')
);

print_r($matrix);