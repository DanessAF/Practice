<?php 

$digits = [9];

plusOne($digits);
var_dump($digits);

function plusOne(&$digits) {
    $now = count($digits);
    array_unshift($digits, 0);
    $digits[$now]++;
    while ($digits[$now] >= 10) {
        $digits[$now] = 0;
        $digits[$now - 1]++;
        $now--;
    }
    if ($digits[0] == 0) {
        array_shift($digits);
    }
    return $digits;
}

