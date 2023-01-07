<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne1($digits) {
        return str_split(bcadd(1, implode($digits)));

        /*
         * The bcadd() function in PHP is an inbuilt function
         * and is used to add two arbitrary precision numbers.
         * This function accepts two arbitrary precision numbers
         * as strings and returns the addition of the two numbers
         * after scaling the result to a specified precision.
         * bcadd(string $num1, string $num2, ?int $scale = null): string
         * num1: The left operand, as a string.
         * num2: The right operand, as a string.
         * scale: This optional parameter is used
         * to set the number of digits after the
         * decimal place in the result. If omitted,
         * it will default to the scale set globally
         * with the bcscale() function, or fallback
         * to 0 if this has not been set.
        */
    }
}