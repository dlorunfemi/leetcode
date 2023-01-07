<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     **/
    function searchInsert($nums, $target) {
        $low = 0;
        $high = count($nums) - 1;

        while ($low <= $high) {
            $mid = floor(($high + $low) / 2);

            if ($target === $nums[$mid]) {
                return $mid;
            } elseif ($target > $nums[$mid]) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return $low;
    }

}


$case_1 = new Solution();
echo 'Test Case: ' . $case_1->searchInsert([1,3,5,6], 5) . '<br />';

$case_2 = new Solution();
echo 'Test Case: ' . $case_2->searchInsert([1,3,5,6], 2) . '<br />';

$case_3 = new Solution();
echo 'Test Case: ' . $case_3->searchInsert([1,3,5,6], 7) . '<br />';