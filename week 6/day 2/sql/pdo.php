<?php
//connect to the database world using PDO
$pdo_connection = new PDO(
    'mysql:dbname=world;host=localhost;charset=utf8',
    'root',
    'adrian19061989'
);

var_dump($pdo_connection);