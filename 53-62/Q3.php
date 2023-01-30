<?php

$str = 'aAa';

$num = 3;

$char = "_";

echo chunk_split(str_repeat(strtolower($str), 3), 3, "_");

// aaa_aaa_aaa_