<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

function filter_results($n)
{

  return gettype($n) == "integer" && $n % 2 == 1;

}

$new_array = array_filter($mix, "filter_results");

sort($new_array);

echo "<pre>";
print_r($new_array);
echo "</pre>";

// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )