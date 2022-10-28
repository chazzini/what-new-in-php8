<?php

class User
{

    public function __construct(
        public $name,
        public $role,
        private $status)
    {

    }
}


$user = new User('test', 'Tester', 'inactive');
var_dump($user);