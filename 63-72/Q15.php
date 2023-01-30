<?php

$chars = ["o", "r", "e", "z", "l", "E"];

$index = 0;

$next = (int) true;

while ($chars[$next] != null) {

    $index = $next;

    $next++;

}

$result = "";
for ($j = $index; $j >= 0; $j--) {

    $result .= $chars[$j];

}

echo ($result) . "<br>";

// "Elzero"