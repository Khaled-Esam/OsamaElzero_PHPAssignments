<?php

$mix = [1, 2, "A", "B", "C", 3, 4];

$count1 = 0;

$count2 = 0;

foreach ($mix as $value) {

    if (gettype($value) == "integer") {

        echo "$value <br>";

        $count1++;

    } else {

        $count2++;

    }

}

echo "$count1 Number Printed <br>";

echo "$count2 Letters Ignored";

// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"