<?php 

// Methoh One
echo time() . "<br>"; 

// Method Two
echo getdate()[0] . "<br>";

// Method Three
$now = date("Y-m-d H:i:s");

echo strtotime($now);




// 1668020233
// 1668020233
// 1668020233