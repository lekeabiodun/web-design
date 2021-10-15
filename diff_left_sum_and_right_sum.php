<?php

/* ----------------------------------------------------------------
Given an unsorted array, find the minimum absolute difference between the left sum and the right sum of each element.

Example: 

arr = [3,1,2,4,3]

1st diff = |3 - 10| = 7 => leftSum = 3, rightSum = 10
2nd diff = |4 - 9| = 5 => leftSum = 4, rightSum = 9
3rd diff = |6 - 7| = 1 => leftSum = 6, rightSum = 7
4th diff = |10 - 3| = 7 => leftSum = 10, rightSum = 3

*/

$arr = [3,1,2,4,3];

function diff_left_sum_and_right_sum($array) {

    $diff = 0;
    $min_diff = 0;
    $left_sum = 0;
    $right_sum = array_sum($array);

    for($i = 0; $i < count($array); $i++) {

        $left_sum += $array[$i];
        $right_sum -= $array[$i];

        // $diff = abs($right_sum - $left_sum);

        // $min_diff = $i === 0 ? abs($right_sum - $left_sum) : ( $min_diff > $diff ? $diff : $min_diff);

        if($i === 0) {
            $min_diff = abs($right_sum - $left_sum);
        } else {
            $diff = abs($right_sum - $left_sum);
            $min_diff = $min_diff > $diff ? $diff : $min_diff;
        } 
    }

    return $min_diff;
}


echo diff_left_sum_and_right_sum($arr);