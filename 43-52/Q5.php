<?php

function check_status($a, $b, $c)
{

    $name = "";

    $age = 0;

    $state = $a;

    if (gettype($a) == "string") {

        $name = $a;

        if (gettype($b) == "integer") {

            $age = $b;

            $state = $c;

        } else {

            $age = $c;

            $state = $b;

        }

    } else if (gettype($a) == "integer") {

        $age = $a;

        if (gettype($b) == "string") {

            $name = $b;

            $state = $c;

        } else {

            $name = $c;

            $state = $b;

        }

    } else {

        if (gettype($b) == "string") {

            $name = $b;

            $age = $c;

        } else {

            $name = $c;

            $age = $b;

        }

    }

    return ("Hello $name, Your Age Is $age, You Are " . ($state == true) ? "Avilable" : "Not Avilable" . " For Hire");

}

echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"

echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"

echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"

echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
