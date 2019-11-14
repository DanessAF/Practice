<?php 



echo reverse(123);

 /**
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {
    if ($x == 0) {
        return 0;
    }
    if ($x > 0) {
        $reverse_x = abs(ltrim(strrev($x), '0'));
    } else {
        $x = abs($x);
        $reverse_x = 0 - abs(ltrim((strrev($x)), '0'));
    }
    if (abs($reverse_x) > 2147483648) {
        return 0;
    }
    return ($reverse_x);
}