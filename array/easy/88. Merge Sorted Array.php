<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge1(&$nums1, $m, $nums2, $n) {
        $k = $m + $n - 1;
        $m = $m - 1;
        $n = $n - 1;
        while ($n >= 0) {
            $nums1[$k--] = ($nums1[$m] > $nums2[$n]) ? $nums1[$m--] : $nums2[$n--];
        }
    }
}