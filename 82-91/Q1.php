<?php

echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";

echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";

echo round(disk_total_space("E:") / 1024 / 1024 / 1024 / 1024, 2) . "<br>";

// "1.37 Terabyte"
// "0.46 Terabyte"