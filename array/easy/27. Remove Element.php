<?php

/**
 *
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $count = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != $val) {
                $nums[$count] = $nums[$i];
                $count++;
            }
        }
        return $count;
    }
}

$case_1 = new Solution();
echo 'Test Case: ' . $case_1->removeElement([3,2,2,3], 3) . '<br />';

$case_2 = new Solution();
echo 'Test Case: ' . $case_2->removeElement([0,1,2,2,3,0,4,2], 2) . '<br />';