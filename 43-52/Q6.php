<?php

function calculate($first, $second, $op = "add")
{

    if ($op == "add" || $op == "a") {

        return $first + $second;

    } elseif ($op == "subtract" || $op == "s") {

        return $first - $second;

    }
    if ($op == "multiply" || $op == "m") {

        return $first * $second;

    } else {

        return "Please, Enter Valid Operation";

    }

}

echo calculate(10, 20); // 30

echo "<br>";

echo calculate(10, 20, "a"); // 30

echo "<br>";

echo calculate(10, 20, "s"); // -10

echo "<br>";

echo calculate(10, 20, "subtract"); // -10

echo "<br>";

echo calculate(10, 20, "multiply"); // 200

echo "<br>";

echo calculate(10, 20, "m"); // 200