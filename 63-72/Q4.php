<?php

$nums = [10, 20, 30];

echo array_sum($nums) . "<br>";

echo array_reduce($nums, fn($a, $b) => $a + $b);

// 60
// 60