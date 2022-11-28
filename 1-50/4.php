<?php

// 4. Median of Two Sorted Arrays

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $mergeArray = array_merge($nums1, $nums2);
        
        
        $total = count($mergeArray);
        if ($total % 2 === 1) {
            sort($mergeArray);
            $main = (($total + 1) / 2) - 1;
            return $mergeArray[$main];
        } else {
            sort($mergeArray);
            $half = ($total / 2) - 1;
            $halfPlus = $half + 1;

            return (($mergeArray[$half] + $mergeArray[$halfPlus]) / 2);
        }
    }
}