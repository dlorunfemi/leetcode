<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     * 
     * use a loop to iterate through the array 
     * and check if the current element is the 
     * same as the next element. If it is, you 
     * can remove the next element by using the 
     * splice() method.
     * 
     * The time complexity of modifying the original 
     * array in place is O(n), where n is the length 
     * of the array. This is because the loop iterates 
     * through the array once and performs a constant 
     * amount of work for each element.
     * */

     function removeDuplicates(&$nums) {
        for ($i=0; $i < count($nums) - 1; $i++) { 
            if ($nums[$i] == $nums[$i + 1]) {
                array_splice($nums, $i + 1, 1);
                $i--;
            }
        }
     }
}

$case_1 = new Solution();
echo 'Test Case: ' . $case_1->removeDuplicates([1,1,2]) . '<br />';

$case_2 = new Solution();
echo 'Test Case: ' . $case_2->removeDuplicates([0,0,1,1,1,2,2,3,3,4]) . '<br />';
