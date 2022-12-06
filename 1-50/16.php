<?php

class Solution {

    /** 16. 3Sum Closest
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        $count = count($nums);
        if ($count > 3000 || $count < 3) {
            return 0;
        }

        if ($target > pow(10, 4) || $target < (pow(10,4) * -1)) {
            return 0;
        }
        sort($nums);
        $result = $nums[0] + $nums[1] + $nums[2];
    
        for ($i=0; $i < $count - 2; $i++) { 
            if ($i > 0 && $nums[$i] === $nums[$i-1]) {
                continue;
            }

            $l = $i+1;
            $r = $count -1;

            while ($l < $r) {
                $temp = $nums[$i] + $nums[$l] + $nums[$r];
                if ($temp === $target) {
                    return $temp;
                }

                if (abs($target - $temp) < abs($target - $result)) {
                    $result = $temp;
                    echo "result:".$result;
                    echo "<BR>";
                }

                if ($temp < $target) {
                    $l++;
                } else {
                    $r--;
                }
            }
        }
        return $result;
    }
}