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

    function merge2(&$nums1, $m, $nums2, $n) {
        $nums1 = array_splice($nums1, 0, $m);
        $nums2 = array_splice($nums2, 0, $n); // this is not necessary but it for efficiency
        $nums1 = array_merge($nums1, $nums2);

        sort($nums1);

        return $nums1;
    }

}