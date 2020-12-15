<?php

/*
the new in php 8
when you call function you can determine argument name and assigned his value
this operation must be order of argument name
you can also use array Spread
*/

function login ($username , $password){
    echo  $username .'<br>' . $password;
}

login(
    username:'mohamed',
    password:'123456'
);

echo '<hr>';

class Animal
{
    public function __construct($dog , $cat)
    {
        echo  $dog .'<br>' . $cat;

    }
}

// you can also use array sperating
$anilmals_name=[
    'dog' => 'rex',
    'cat' => 'kity'
];

$animals = new Animal(...$anilmals_name);
