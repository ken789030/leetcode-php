<?php
// 7. Reverse Integer
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        
        
        $true = $x < 0 ? -1 : 1;

        $x *= $true;

        $x = strrev($x);

        $x = intval($x) * $true;
        
        if (intval($x) >= (pow(2,31) - 1)) {
            return 0;
        }

        if (intval($x) <= ((pow(2,31) * -1) -1)) {
            return 0;
        }

        return $x;

    }
