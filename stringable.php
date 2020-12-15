<?php

/*
the new in php8
stringable
 is to allow using the string|Stringable union type in PHP 8, to accept both strings and objects that implement __toString(). This is critically missing currently, on codes that deal with stringable objects: they can't be  made type-safe.
*/

 class Users
 {
     public function __toString() :string
     {
     }
     public function testData(){
        return 'welcome php8';
     }
 }

 function test(string|stringable $data){
    return $data->testData();
 }
 echo test(new Users());

