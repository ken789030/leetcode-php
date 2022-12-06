<?php

class Solution {
    
    /** 17. Letter Combinations of a Phone Number
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) 
    {
        if (strlen($digits) > 4) {
            return [];
        }

        return $this->helper($digits, "");
    }

    function helper($digits, $char) 
    {
        $map = ["", "", "abc", "def", "ghi", "jkl", "mno", "pqrs", "tuv", "wxyz"];
        $result = [];

        $strings = $map[$digits[0]];

        $len = strlen($digits);

        for ($i=0; $i < strlen($strings); $i++) {
            $mapVal = $strings[$i];
            if ($len === 1) {
                $result[] = $char.$mapVal;
            } else{
                $moreStrings = $this->helper(substr($digits,1),$char.$mapVal);
                foreach($moreStrings as $more){
                    $result[] = $more;
                }
            }
            
        }

        return $result;
    }
}