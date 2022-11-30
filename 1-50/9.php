<?php

class Solution {
    // 9. Palindrome Number
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0 || $x % 10 === 0 && $x != 0 ) {
            return false;
        }

        if (intval($x) >= (pow(2,31) - 1)) {
            return false;
        }

        if (intval($x) <= ((pow(2,31) * -1) -1)) {
            return false;
        }

        $backNum = 0;
        while ($x > $backNum) {
            $backNum = ($backNum * 10) + ($x % 10);
            $x = intval(floor($x / 10));
        }


        return $x == $backNum || $x == intval(floor($backNum /10));
    }
}