<?php

$start = 0;

$mix = [1, 2, 3, "A", "B", "C", 4];

for (; $start < count($mix); $start++) {

    if ($start == (int) false) {

        continue;

    }
    if (gettype($mix[$start]) == "integer") {

        echo $mix[$start] . "<br>";

    }

}

// 2
// 3
// 4