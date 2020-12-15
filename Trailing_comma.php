<?php
/*
the new in php 8
*/
// the , after $email will not be error
function test($name,$email,)
{
    return $name .' '. $email;
}
echo test("mohamed" , 'mohamed@mohamed.com');