<?php

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     * This solution works by using a hash table
     * (implemented using an associative array in PHP) to
     * store the indices of the elements in $nums as they
     * are processed. For each element, the function checks
     * if the hash table contains an element that, when
     * added to the current element, would sum to $target.
     * If it finds such an element, it returns the indices
     * of the two elements. If it doesn't find such an element,
     * it adds the current element and its index to the hash table.
     *
     * This solution has a time complexity of O(n) because
     * it only needs to iterate over the list of $nums once,
     * regardless of the size of the input. This makes it
     * more efficient than the next solution, which had
     * a time complexity of O(n^2).
     *
     */
    function twoSum($nums, $target) {
        $hash = [];
        for ($i = 0; $i < count($nums); $i++) {
            if (isset($hash[$target - $nums[$i]])) {
                return [$hash[$target - $nums[$i]], $i];
            }
            $hash[$nums[$i]] = $i;
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     * Uses two nested loops to iterate over the entire list
     * of $nums, and returns the indices of the two numbers
     * that add up to $target if it finds them.
     * The time complexity of this function is also O(n^2).
     */
    function twoSumB($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] = $nums[$j] == $target) {
                    return [$nums[$i], $nums[$j]];
                }
            }
        }
    }
}

$case_1 = new Solution();
echo 'Test Case 1 A: ' . $case_1->twoSum([2,7,11,15], 9) . '<br />';
echo 'Test Case 1 B: ' . $case_1->twosumB([2,7,11,15], 9) . '<br />';

$case_2 = new Solution();
echo 'Test Case 1 A: ' . $case_2->twoSum([3,2,4], 6) . '<br />';
echo 'Test Case 1 B: ' . $case_2->twosumB([3,2,4], 6) . '<br />';

$case_3 = new Solution();
echo 'Test Case 1 A: ' . $case_3->twoSum([3,3], 6) . '<br />';
echo 'Test Case 1 B: ' . $case_3->twosumB([3,3], 6) . '<br />';
