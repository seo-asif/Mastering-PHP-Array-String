<?php

$numbers = range(1,10);
// print_r($numbers);
function isOdd($value){
    return $value % 2 !== 0 ;
}
function removeEvenNumbers(&$array){
    $array = array_filter($array,'isodd');
    print_r($array);
}

removeEvenNumbers($numbers);
