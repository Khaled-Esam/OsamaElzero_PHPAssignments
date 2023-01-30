<?php

function sum_all(...$nums)
{

    $sum = 0;

    foreach ($nums as $num) {

        if ($num == 5) {

            continue;

        } elseif ($num == 10) {

            $num = 20;

        }

        $sum += $num;

    }

    return $sum;

}

echo sum_all(10, 12, 5, 6, 6, 10); // 64

echo sum_all(5, 10, 5, 10); // 40