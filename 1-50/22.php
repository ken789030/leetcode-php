<?php

class Solution {

    /**22. Generate Parentheses
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $result = [];

        $this->helper($result, "", $n, $n);

        return $result;
    }

    function helper(&$result, $curString, $left, $right) {
        if ($left === 0 && $right === 0) {
            $result[] = $curString;
        }

        if ($left > $right) {
            return ;
        }

        if ($left > 0) {
            $this->helper($result, $curString."(", $left-1, $right);
        }

        if ($right > 0) {
            $this->helper($result, $curString.")", $left, $right -1 );
        }

    }
}