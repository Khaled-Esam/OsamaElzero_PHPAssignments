<?php

$file = fopen("elzero.txt", "c+");

// Method One

for ($i = 0; $i < count(file("elzero.txt")) - 2; $i++) {

    echo fgets($file) . " ";

}

$last_line = fgets($file);

echo "<br>";

rewind($file);


// Method Two

echo fread($file, strlen("Hello Elzero Web\nSchool\n")) . "<br>";


//Method Three

rewind($file);

echo fgets($file);

echo fgets($file) . "<br>";


// Method Four

$content = file_get_contents("elzero.txt");

$content = str_replace($last_line, "", $content);

echo $content;


fclose($file);

// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"