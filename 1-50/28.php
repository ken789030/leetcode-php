<?php

class Solution {

    /**28. Find the Index of the First Occurrence in a String
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {

        $haystackCount = strlen($haystack);
        $needleCount = strlen($needle);

        for ($pos = 0; $pos <= $haystackCount - $needleCount; $pos++) {
            $found = true;

            for ($i = 0; $i < $needleCount; $i++) {
                if ($haystack[$pos+ $i] != $needle[$i]) {
                    $found = false;
                    break;
                }
            }

            if ($found) {
                return $pos;
            }
        }

        return -1;
    }
}