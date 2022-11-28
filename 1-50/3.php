<?php
// 3. Longest Substring Without Repeating Characters
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $max = 0;
        $len = 0;
        $currency = '';

       for ($i = 0; $i < strlen($s); $i++) {

           if (strpos($currency, $s[$i]) !== false) {
               $currency = substr($currency, strpos($currency, $s[$i])+ 1);
               $len = strlen($currency);
           }

           $currency .= $s[$i];
           $len ++;
           $max = max($max, $len);
       }

       return $max;
    }
}