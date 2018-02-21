<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class pancake
{
    public function prepare()
    {
        echo ' preparing flower </br>';
        echo ' preparing milk </br>';
        echo ' preparing eggs </br>';
    }
}

class blueberry_pancake extends pancake
{
    public function prepare()
    {
    parent::prepare();
    echo 'Preparing blueberry jam...<br>';
    }
}

$bbp = new blueberry_pancake();
$bbp ->prepare();
?>

