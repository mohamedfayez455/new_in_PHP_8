<?php
/*
the new in php8
Determine if a string contains a given substring
*/
$word = 'hi i am php 8 version';

if (strpos($word , 'php') !== false) {
    echo 'was found';
}else {
    echo 'not found';
}
echo '<br>';
var_dump(strpos($word , 'php')); // return int

echo '<hr>';

if (str_contains($word , 'php')) {
    echo 'was found';
}else {
    echo 'not found';
}
echo '<br>';
var_dump(str_contains($word , 'php')); // return bool