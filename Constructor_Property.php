<?php

/*
the new in php8
property promotion allows you to combine class fields, constructor definition and variable assignments all into one syntax, in the construct parameter list.
*/
class User {
    public $name ;
    public $email ;
    public $password ;
    public function __construct($name , $email , $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    public function getUserDats()
    {
        echo 'name is: ' . $this->name .'<br>';
        echo 'email is: ' . $this->email .'<br>';
        echo 'password is: ' . $this->password .'<br>';
    }
}
$mohamed = new User('mohamed' , 'mohamed@mohamed.com' , '123456');
$mohamed->getUserDats();

echo '<hr>';

// now in php8
class NewUser {
    public function __construct(
        public string $name,
        public string $email,
        public string|int $password
    ){}
    public function getNewUserData(){
        echo 'the new user name is : ' . $this->name . '<br>';
        echo 'the new user email is : ' . $this->email . '<br>';
        echo 'the new user password is : ' . $this->password . '<br>';
    }
}
$ali = new NewUser('ali' , 'ali@ali.com' , '123456');
$ali->getNewUserData();