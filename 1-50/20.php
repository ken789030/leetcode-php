<?php


class Solution {

    /** 20. Valid Parentheses
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $len = strlen($s);
        if ($len > pow(10, 4) || $len < 1) {
            return false;
        }
        $list=['{'=>'}','['=>']','('=>')'];
        $res=[];
        for($i=0; $i < $len; $i++){
            $tmp=end($res);
            if($list["$tmp"] == $s[$i]){
                unset($res[key($res)]);
            }else{
                $res[]=$s[$i];
            }
        }
        return count($res)==0;
    }
}
