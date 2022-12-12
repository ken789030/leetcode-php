<?php

/**
 * 24. Swap Nodes in Pairs
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
     * @param ListNode $head
     * @return ListNode
     */
    function swapPairs($head) {
        if ($head == null || $head->next == null) {
            return $head;
        }

        $temp = $head->next;
        $head->next = $this->swapPairs($temp->next);
        $temp->next = $head;

        return $temp;
    }
}