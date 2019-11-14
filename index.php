<?php



function binarySearch($target, $array)
{
    $find = true;
    $now_query_key = intval((count($array) - 1) / 2);
    $space = $now_query_key;
    while ($find) {
        if ($array[$now_query_key] == $target) {
            return true;
        } 
        else if ($array[$now_query_key] < $target) {
            echo $space . '</br>';
            $space = intval($space / 2);
            $now_query_key = $now_query_key + $space;
        } 
        else if ($array[$now_query_key] > $target) {
            echo $space . '</br>';
            $space = intval($space / 2);
            $now_query_key = $now_query_key - $space;
        }
        if ($space == 0) {
            return false;
        }
    }
        
}

$max = 100;
$array = [];
$now = 1;

for ($y = 0; $y  < $max; $y ++) { 
    $array[] = $now;
    $now++;
}
var_dump(binarySearch(116, $array));