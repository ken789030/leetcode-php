<?php

//13. Roman to Integer

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sLenght = strlen($s);
        if ($sLenght > 16 || $sLenght < 1) {
            return 0;
        }

        $map = [
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1,
        ];

        $result = 0;

        for ($i=0; $i < $sLenght; $i++) { 
            if ($i === ($sLenght - 1)) {
                $result += $map[$s[$i]];
            } else {
                $result += $map[$s[$i]] >= $map[$s[$i+1]] ? $map[$s[$i]] : ($map[$s[$i]] * (-1));
            }
        }

        return $result;
    }
}