<?php
namespace App\Model;

class User
{

}


class UserModel
{
    public function handle(mixed $mixed)
    {
        //can still get the resolution with in the method
        echo $mixed::class;
        echo "\n";
        return $mixed;
    }
}
echo User::class; // this work in php 7.4echo "\n";
echo "\n";
$user = new User();
echo $user::class; // does not work in 7.4 but work in php 8.0
echo "\n";

$usermodel = new UserModel();
$usermodel->handle($user); 