<?php

class Solution {

    /** 27. Remove Element
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $count = count($nums);
        if ($count <= 0 || $count > 100) {
            return 0;
        }

        $index = 0;

        for ($j = 0; $j < $count; $j++) {
            if ($nums[$j] !== $val) {
                $nums[$index] = $nums[$j];
                $index++;
            }
        }

        return $index;
    }
}