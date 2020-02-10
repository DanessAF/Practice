<?php
    // 异位词

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $s = str_split($s, 1);
        $t = str_split($t, 1);
        $sMapArray = [];
        foreach ($s as $v) {
            $sMapArray[$v] = !empty($sMapArray[$v]) ? $sMapArray[$v] + 1 : 1;
        }
        foreach($t as $v) {
            if (!isset($sMapArray[$v])) {
                echo 1;
                return false;
            }
            $sMapArray[$v]--;
        }
        foreach($sMapArray as $v) {
            if ($v != 0){
                return false;
            }
        }
        return true;
    }
$s = "bbbb";
$t = 'bbb';

echo isAnagram($s, $t) ? 1 : 0;