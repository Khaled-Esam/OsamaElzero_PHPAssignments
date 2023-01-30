<?php

$num_one = -1;

$num_two = 2.5;

$let_one = "o";

$let_two = "z";

$str = "El%er0";

// $arr = [$str[$num_one] => $let_one, $str[$num_two] => $let_two ];

$str = str_replace([$str[$num_one], $str[$num_two]], [$let_one, $let_two], $str);

// $str =  strtr($str, $arr);

echo $str; // Elzero