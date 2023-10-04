<?php
class ListNode {
    public $val;
    public $next;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function addTwoNumbers($l1, $l2) {
    $dummyHead = new ListNode(0);
    $current = $dummyHead;
    $carry = 0;

    while ($l1 !== null || $l2 !== null) {
        $x = ($l1 !== null) ? $l1->val : 0;
        $y = ($l2 !== null) ? $l2->val : 0;

        $sum = $x + $y + $carry;
        $carry = intval($sum / 10);
        $current->next = new ListNode($sum % 10);
        $current = $current->next;

        if ($l1 !== null) $l1 = $l1->next;
        if ($l2 !== null) $l2 = $l2->next;
    }

    if ($carry > 0) {
        $current->next = new ListNode($carry);
    }

    return $dummyHead->next;
}

// Example usage
$l1 = new ListNode(2, new ListNode(4, new ListNode(3))); // Represents the number 342
$l2 = new ListNode(5, new ListNode(6, new ListNode(4))); // Represents the number 465

$result = addTwoNumbers($l1, $l2);

// Print the result
while ($result !== null) {
    echo $result->val . " ";
    $result = $result->next;
}

