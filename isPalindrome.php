<?php
    // 回文

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower($s);
        $preg = array_values(preg_grep('/^[A-Za-z0-9]+$/', str_split($s)));
        $count = count($preg);
        $preg_array_reverse = array_reverse($preg);
        var_dump($preg);
        var_dump($preg_array_reverse);
        for ($i = 0; $i < $count; $i++) { 
            if ($preg[$i] != $preg_array_reverse[$i]) {
                return false;
            }
        }
        return true;
    }
$s = "race a car";
$t = 'bbb';

echo isPalindrome($s, $t) ? 1 : 0;