<?php

$arr = [];

// Method One

// for ($i = 0; $i < count(filter_list()); $i++) {

//     $arr[$i] = filter_id(array_values(filter_list())[$i]);

// }

// $arr = array_combine(array_values($arr), array_values(filter_list()));


// Method Two

foreach (filter_list() as $id => $value) {

    $arr [filter_id($value)] = $value;

}


echo "<pre>";
print_r($arr);
echo "</pre>";

// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )