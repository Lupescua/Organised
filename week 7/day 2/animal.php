<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class animal
{
    public $hungry = true;
    public function eat()
    {
        $this->hungry= false;
    }
}

class dog extends animal
{
use domesticated;
}

class wolf extends dog
{

}

trait domesticated{
    public function beFed()
    {
       parent::eat();
       echo 'Not Hungry';
    }
}


$new_dog = new dog;
$new_dog->beFed();

?>