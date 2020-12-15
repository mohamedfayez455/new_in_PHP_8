<?php
/*
the new in php8
Checks if a string ends with a given substring
*/


$word = 'welcome in php8';
if (str_ends_with($word , 'php8')) {
    echo 'hi php8';
}else {
    echo 'faild';
}
echo '<br>';
var_dump(str_ends_with($word , 'welcome'));
