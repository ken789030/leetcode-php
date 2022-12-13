<?php


class Solution {

    /** 26. Remove Duplicates from Sorted Array
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $count = count($nums);
        if ($count <= 1) {
            return $count;
        }

        $index = 0;

        for ($j = 1; $j < $count; $j++) {
            if ($nums[$j] != $nums[$index]) {
                $index++;
                $nums[$index] = $nums[$j];
            }
        }

        return $index+1;
    }
}