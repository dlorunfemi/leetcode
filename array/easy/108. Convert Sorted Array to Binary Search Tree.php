<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        if (!$nums) {
            return null;
        }
        $m = floor(count($nums) / 2);

        return new TreeNode(
            $nums[$m],
            $this->sortedArrayToBST(array_slice($nums, 0, $m)),
            $this->sortedArrayToBST(array_slice($nums, $m + 1))
        );
    }
}