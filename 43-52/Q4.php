<?php

function multiply(...$nums)
{

    $result = 1;

    foreach ($nums as $num) {

        if (gettype($num) !== "string") {

            $result *= (int) $num;

        }

    }

    return $result;

}

echo multiply(10, 20); // 200

echo multiply("A", 10, 30); // 300

echo multiply(100.5, 10, "B"); // 1000