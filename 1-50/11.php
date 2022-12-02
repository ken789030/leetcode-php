<?php

class Solution {

    /**
     * 11. Container With Most Water
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        if (!is_array($height)) {
            return 0;
        }

        if ( count($height) < 2 || count($height) > pow(10, 5)) {
            return 0;
        }
        
        $max = 0;
        $start = 0;
        $end = count($height) - 1;

        while ($start < $end) {
            $max = max($max , min($height[$start], $height[$end]) * ($end - $start));
            $height[$start] < $height[$end] ? $start++: $end--;
        }

        return $max;
    }
}