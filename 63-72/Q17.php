<?php

$nums = [1, 2, 3, 4, 5, 6];


$num = random_int(0, count($nums) - 1);

for ($i = $num, $j = 0; $i < count($nums) && $j < count($nums); $i = (($i + 1) % count($nums)), $j++) {

    $nums[$i] = $nums[$j];

}

print_r($new_array);

// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )