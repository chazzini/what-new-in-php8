<?php

class User
{
    private $status;
    //public  $name; // cannot be redeclared when using promoter
    public function __construct(
        public $name,
        public $role,
        $status)
    {
        $this->status = $status;//do something with passed in status

    }
}


$user = new User('test', 'Tester', 'inactive');
var_dump($user);