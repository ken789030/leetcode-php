<?php

class Solution {
    //8. String to Integer (atoi)
    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $start = false;
        $char = '';
        for ($i = 0; $i < strlen($s); $i++) {
            if (!$start) {
                if ($s[$i] === '-' || $s[$i] === '+' || is_numeric($s[$i])) {
                    $start = true;
                    $char .= $s[$i];
                } elseif ($s[$i] != ' ') {
                    break;
                }
            } else {
                if (is_numeric($s[$i])) {
                    $char .= $s[$i];
                } else {
                    break;
                }
            }
        }

        $int = intval($char);

        if ($int >= (pow(2,31) -1)) {
            return (pow(2, 31) - 1);
        }

        if ($int <= (pow(2, 31) * -1 )) {
            return (pow(2, 31) * - 1);
        }

        return $int;
    }
}