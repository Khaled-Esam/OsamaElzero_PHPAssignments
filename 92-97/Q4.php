<?php

$date = "1990-10-01";

$date1 = date_create($date);

$date2 = date_create("1-1-1970");

$diff = date_diff($date2, $date1);

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->days . " Days<br>";

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y . " Years<br>";


// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"