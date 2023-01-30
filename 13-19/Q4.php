<?php

echo __DIR__;

echo '<br>';

echo $_SERVER['DOCUMENT_ROOT'];

echo '<br>';

echo $_SERVER['SystemRoot'];

echo '<br>';

echo $_SERVER['OPENSSL_CONF'];

echo '<br>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

// "C:/xampp/htdocs"
// "localhost"
// "C:\WINDOWS"
// "C:/xampp/apache/bin/openssl.cnf"