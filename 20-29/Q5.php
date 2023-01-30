<?php

$points = 10;

$points += (bool) "Khaled" + true + true;

echo $points; // 13

echo '<br>';

$points -= true + true + true + true + true;

echo $points; // 8;