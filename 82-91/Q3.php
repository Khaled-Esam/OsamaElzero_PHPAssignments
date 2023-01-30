<?php

// mkdir("Programming/PHP", 0711, True);

if (file_exists("Programming\PHP")) {

    rmdir("Programming\PHP");

    echo "Directory Programmin\PHP Removed";

}

if (file_exists("Programming")) {

    rmdir("Programming");

    echo "Directory Programmin Removed";

}


// "Directory Programming/PHP Removed"
// "Directory Programming Removed"