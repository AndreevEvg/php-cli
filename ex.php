#!/usr/bin/php
<?php

function hasPrefix($str, $prefix) {
    if (strlen($str) >= strlen($prefix) && strpos($str, $prefix) == 0) echo "true\n";
    return false;
}

$str = "Hello World!";
$prefix = "Hello";

hasPrefix($str, $prefix);