<?php

$data =  file_get_contents("elzero.txt");

$data = str_replace("Osamaa", "Elzero", $data);

file_put_contents("elzero.txt", $data);

echo file_get_contents("elzero.txt");