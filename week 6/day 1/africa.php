<?php
require_once 'giraffe.php';

$jana = new giraffe('Jana');
$jana->feed();
echo $jana->name.' is '.($jana->isHappy()).'';

echo "<hr>";

var_dump($jana);

$greg = new giraffe('Greg');
$greg->drink();

var_dump($greg);

$philipina = new giraffe('Philipina');

var_dump($philipina);

echo 'There are '.giraffe::$nr_of_giraffes.' giraffes in Africa';