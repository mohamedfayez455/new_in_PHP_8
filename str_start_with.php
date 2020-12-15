<?php
/*
the new in php8
Checks if a string starts with a given substring
*/


$word = 'welcome in php8';
if (str_starts_with($word , 'welcome')) {
    echo 'hi php8';
}else {
    echo 'faild';
}
echo '<br>';
var_dump(str_starts_with($word , 'welcome'));
