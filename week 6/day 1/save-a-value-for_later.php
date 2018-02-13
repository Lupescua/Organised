<?php

class user
{
public static $instance = null;

public $id = 123;
public $username = 'HOnza';
}


function foo()
{
$user = new user();
user::$instance = $user;

}

?>