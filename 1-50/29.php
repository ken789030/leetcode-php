<?php

class Solution {

    /**
     *  29. Divide Two Integers
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        if ($divisor === 0) {
            return 0;
        }
        $result = intval(bcdiv($dividend, $divisor, 0)); 
        
        if ($result < (pow(2,31) * -1)) {
            return (pow(2,31) * -1);
        }

        if ($result > (pow(2,31) - 1)) {
            return (pow(2,31) -1);
        }

        return $result;
    }
}