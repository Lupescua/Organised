<?php


class giraffe{
    public static $nr_of_giraffes = 0;
public $is_hugry = true;
public $is_thirsty = true;
public $name = null;

public function __construct ($name)
{
    //gives the giraffe the given name
    $this->name = $name;

    //raise the global number of giraffes by 1
    static::$nr_of_giraffes++;
}
public function feed(){
   $this->is_hugry=false;
}
public function drink(){
   $this->is_thirsty=false;
}
/**
 * Returns happy if the giraffe is not hungry and not thirsty
 *
 */
public function isHappy(){
    return !$this->is_hugry && !$this->is_thirsty ? 'happy':'not happy';
 }

}