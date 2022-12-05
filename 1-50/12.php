<?php
//12. Integer to Roman

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        if ($num > 4000 || $num < 0) {
        return '';
    }
    $result = '';

    $map = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];
    
    foreach ($map as $key => $value) {
        while (!($num - $value < 0)) {
            $num = $num - $value;
            $result .= $key;
        }
    }

    return $result;


    }
}