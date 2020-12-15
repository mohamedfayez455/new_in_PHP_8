<?php
/*
the new in php8
A powerful feature that will often be the better choice to using switch
will do strict type checks instead of loose ones. It's like using === instead of ==
*/

// example of swatch
$name ="mohamed";
switch ($name) {
    case "mohamed":
        echo 'male';
        break;
    case "sera":
        echo 'female';
        break;
    default:
        echo 'not found type';
        break;
}

echo '<hr>';

// match example
$message = match($name){
    "mohamed","ahmed","ali" => 'male',
    'sare','aya' => 'female',
    default => 'not found type'
};
echo $message;
