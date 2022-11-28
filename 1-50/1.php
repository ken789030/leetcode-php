<?php
// 1. Two Sum
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        foreach ($nums as $key => $num) {
            if (isset($map[$target - $num])) {
                return [$map[$target - $num], $key];
            }

            $map[$num] = $key;
        }

        return [];

    }
}