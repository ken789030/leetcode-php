<?php

/**19. Remove Nth Node From End of List
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
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $temp = new ListNode();
        $temp->next = $head;
        $node = $head;
        $count = 0;

        while($node != null) {
            $count++;
            $node = $node->next;
        }

        $count = $count - $n;
        $node = $temp;

        while($count > 0) {
            $count--;
            $node = $node->next;
        }

        $node->next = $node->next->next;

        return $temp->next;



    }
}