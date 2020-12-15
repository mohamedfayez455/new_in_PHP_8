<?php
/*
 A type of mixed would be equivalent to array or bool or callable or int or float or null or object or resource or string. So, whenever you would be unsure about the type of the property, you would use mixed for the same. The same goes for the return type as well
*/

function test($value):mixed{
    return $value;
}
echo test('hi is test');

/*
look fot this error

function test2(): ?mixed {}

will return error
Fatal error: Mixed types cannot be nullable, null is already part of the mixed type.
*/