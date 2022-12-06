<?php

class Solution {

    /** 18. 4Sum
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        $count = count($nums);
        if ($count > 200 || $count < 1) {
            return [];
        }

        if ($target > pow(10, 9) || $target < (pow(10, 9) * -1)) {
            return [];
        }

        sort($nums);
        
        $result = [];

        for ($i=0; $i < $count -3; $i++) { 
            
            if ($i>0 && $nums[$i] == $nums[$i-1]) {
                continue;
            }
            for ($j=$i+1; $j < $count - 2; $j++) { 
                if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) {
                    continue;
                }
                $l = $j +1;
                $r = $count -1;
                while ($l < $r) {
                    $temp = $nums[$i] + $nums[$j] + $nums[$l] + $nums[$r];
                    if ($temp === $target) {
                        $result[] = [$nums[$i], $nums[$j], $nums[$l], $nums[$r]];
        
                        while ($l+1 < $r && $nums[$l] == $nums[$l+1]) {
                            $l += 1;
                        }
        
                        $l += 1;
        
                        while ($r - 1 > $l && $nums[$r] == $nums[$r-1]) {
                            $r -= 1;
                        }
        
                        $r -= 1;
        
                    } elseif ($temp > $target) {
                        $r -= 1;
                    } else {
                        $l += 1;
                    }
                }
            }
        }
        

        return $result;
    }
}