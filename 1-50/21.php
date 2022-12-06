<?php

/**21. Merge Two Sorted Lists
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        if ($list1 !== null && $list2 !== null) {
            if ($list1->val > $list2->val) {
                $temp = $list1;
                $list1 = $list2;
                $list2 = $temp;
            }
            $list1->next = $this->mergeTwoLists($list1->next, $list2);
        }
        return $list1??$list2;
    }
}