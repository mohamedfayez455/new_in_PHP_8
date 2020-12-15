<?php
/*
the new in php 8
you can determine more then one type for parm $datat
and also determine many type for return data
look here the user can givew me $data parms as int or string or array and the return will be int or string
*/
function changeDate(int|string|array $date): int|string|array {
	return $date;
}
echo changeDate('2020-12-12');

echo '<br>';

// you also can return void
function changeDate2(int|string $date) :void {
	echo $date; // if i write return will be error
}
changeDate2(3);

