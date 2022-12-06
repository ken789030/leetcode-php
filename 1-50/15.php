<?php

class Solution {

    /** 15. 3Sum
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $count = count($nums);
    
        if ($count > 3000 || $count < 3) {
            return [];
        }
        $result = [];
        sort($nums);
        for ($i=0; $i < $count-2; $i++) { 
            if ($nums[$i] + $nums[$i+1] + $nums[$i+2] > 0) {
                break;
            }

            if ($nums[$i]+ $nums[$count-2] + $nums[$count -1] < 0) {
                continue;
            }

            if ($i>0 && $nums[$i] == $nums[$i-1]) {
                continue;
            }

            $l = $i +1;
            $r = $count -1;

            while ($l < $r) {
                $temp = $nums[$i] + $nums[$l] + $nums[$r];

                if ($temp === 0) {
                    $result[] = [$nums[$i], $nums[$l], $nums[$r]];

                    while ($l+1 < $r && $nums[$l] == $nums[$l+1]) {
                        $l += 1;
                    }

                    $l += 1;

                    while ($r - 1 > $l && $nums[$r] == $nums[$r-1]) {
                        $r -= 1;
                    }

                    $r -= 1;

                } elseif ($temp > 0) {
                    $r -= 1;
                } else {
                    $l += 1;
                }
            }

        }
        return $result;
    }
}