<?php

function change_permissions($file)
{

    if (dirname($file) == ".") {

        echo "This Is Directory And Only Files Allowed<br>";

    } else if (pathinfo($file, PATHINFO_EXTENSION) !== "txt") {

        echo "File Extension Is Not Txt<br>";

    } else {

        fopen($file, "c+");

        chmod($file, 0700);

        echo "Permissions Are Changed";

    }

}

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
// echo change_permissions("Work.docx"); // File Extension Is Not Txt
// echo change_permissions("Result.txt"); // Permissions Changed