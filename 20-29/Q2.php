<?php

$a = "10";

echo +$a;

echo '<br>';

var_dump(+$a);

echo '<br>';

echo (int) $a;

echo '<br>';

echo var_dump((int) $a);

echo (integer) $a;

echo '<br>';

echo var_dump((integer) $a);

echo '<br>';

echo intval($a);

echo '<br>';

var_dump(intval($a));

echo '<br>';

settype($a, "int");

echo $a;

echo '<br>';

echo gettype($a);


// 10
// "integer"
// 10
// "integer"
// 10
// "integer"

// // For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"