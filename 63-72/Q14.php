<?php

$nums = [10, 100, -20, 50, 30];

$min = $nums[0];

for ($i = 1; $i < count($nums); $i++) {

    if ($nums[$i] < $min) {

        $min = $nums[$i];

    }

}

echo $min;

// -20