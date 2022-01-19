<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    var_dump(PHP_INT_MAX);
    var_dump(PHP_INT_MAX+1);

    $true = TRUE;
    $false = FALSE;
    $a = !($true && $false);
    var_dump($a);
?>