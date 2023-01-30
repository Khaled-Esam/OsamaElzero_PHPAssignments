<?php

$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce(array_filter($nums, fn($n) => $n != 5), fn($a, $b) => $a + $b);

// 100