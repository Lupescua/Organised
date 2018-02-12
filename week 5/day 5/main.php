<?php

function some_fct


class user{

public $id;
public $username;
public $name;
public $password;
public $number_of_posts;

public function __construct($future_username)
{
    global $next_user_id;
    $this->username=$future_username;
}
}

?>