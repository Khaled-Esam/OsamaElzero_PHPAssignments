<?php

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$result = "";

foreach ($chars as $char) {

    if (gettype($char) == "string") {

        $result .= $char;

    }

}

echo ucfirst(strtolower($result));

// "Elzero"