<?php

// 第一个唯一字符串

 /**
 * @param String $s
 * @return Integer
 */
function firstUniqChar($s) {
    $s = str_split($s, 1);
    $mapArray = [];
    foreach ($s as $k => $v) {
        if (!empty($mapArray[$v])) {
            $mapArray[$v] = true;
        } else {
            $mapArray[$v] = $k + 1;
        }
    }
    foreach ($mapArray as $v) {
        if ($v !== true) {
            return $v - 1;
        }
    }
    return -1;
}
$s = "cccc";

echo firstUniqChar($s);