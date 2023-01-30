<?php 

$url1 = "http://www.elz ero.org";

$url2 = "http://¥elzero.org";

$url3 = "https://elzero.org";

$url4 = "https://elzero.o¥rg";

echo filter_var($url4, FILTER_SANITIZE_URL);


// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org