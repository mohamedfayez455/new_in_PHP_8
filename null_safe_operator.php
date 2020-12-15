<?php
/*
How this works is when the left hand side of the operator evaluates to null the execution of the entire chain will stop and evalute to null. When it is not null it will behave exactly like the normal -> operator.
*/

class GetUser
{
    public function User()
    {
        return 'welcome User';
    }
}

class Users
{
    public function login()
    {
        return (new GetUser);
    }
}

$users = new Users;
$getData = $users->login();

if ($getData !== null) {
    $userInfo = $getData->User();
    if ($userInfo !== null) {
        echo $userInfo;
    }
}

echo '<hr>';
// in php8
echo $getData->user();