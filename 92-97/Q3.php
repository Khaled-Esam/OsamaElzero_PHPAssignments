<?php

$date = "1990-10-01";

$seconds = strtotime($date);

date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get() . "<br>";

echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($seconds / 60 / 60 / 24, 2) . " Days<br>";

echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($seconds / 60 / 60 / 24 / 365, 1) . " Years";

// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
