<?php

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];

$nums = [4, 5, 6];

array_splice($mix, count($nums), -count($nums), $nums);

print_r($mix);

// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )