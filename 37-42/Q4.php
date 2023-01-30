<?php

$start = 10;

$end = 0;

$stop = 3;

for (; $start >= $end; $start--) {

    if ($start == 10) {

        echo $start . "<br>";

    } else {

        echo "0$start <br>";

    }

    if ($start == $stop) {

        break;

    }

}

// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03