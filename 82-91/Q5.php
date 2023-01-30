<?php

echo pathinfo(__FILE__)["basename"]  . "<br>";

echo pathinfo(__FILE__)["filename"]  . "." . pathinfo(__FILE__)["extension"] . "<br>";

echo basename(__FILE__) . "<br>";

echo basename(__FILE__, ".php") . "." . pathinfo(__FILE__)["extension"];


// "index.php"
// "index.php"
// "index.php"
// "index.php"