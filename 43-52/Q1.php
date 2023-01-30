<?php

function say_hello($name, $gender = "")
{

    if ($gender == "Male" || $gender == "male") {

        echo "Hello Mr $name";

    } elseif ($gender == "Female" || $gender == "female") {

        echo "Hello Miss $name";

    } else {

        echo "Hello $name";

    }

}

say_hello("Khaled");

// echo greeting("Osama", "Male"); // Hello Mr Osama
// echo greeting("Eman", "Female"); // Hello Miss Eman
// echo greeting("Sameh"); // Hello Sameh