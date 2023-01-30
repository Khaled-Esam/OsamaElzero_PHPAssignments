<?php

function get_arguments(...$words)
{

    $all = "";

    foreach ($words as $word) {

        $all .= "$word ";

    }

    return $all;

}

function get_arguments2()
{

    $all = "";

    foreach (func_get_args() as $word) {

        $all .= "$word ";

    }

    return $all;

}

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School

echo get_arguments2("I", "Love", "PHP"); // I Love PHP