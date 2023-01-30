<?php

$files = glob("C:\Users\khale\Downloads\Video\*.*");

foreach ($files as $file) {

    echo (filesize($file) / 1024 / 1024) . " MB<br>";

    echo (filesize($file) / 1024) . " KB<br>";

}