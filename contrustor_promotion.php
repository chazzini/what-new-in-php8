<?php

class User
{
    //old way in php7.4
    public $name;
    public $role;
    public $status;

    public function __construct($name,$role,$status)
    {
        $this->name = $name;
        $this->role = $role;
        $this->status = $status;

    }
}