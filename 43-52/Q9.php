<?php

$greet = function ($name) {

    return "Greetings";

};

$greet = fn($name) => "Greetings";

echo $greet("Osama"); // Greetings