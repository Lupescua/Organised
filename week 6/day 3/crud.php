<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

// We connect to the database
$my_db_handle = new PDO(
    'mysql:host=localhost;dbname=world', //conecting string
    'root', //username
    'adrian19061989'//username
);

// echo "<hr>";
// var_dump($my_db_handle);

// Then we get the object of the query result
$my_record = $my_db_handle->query(
    'SELECT * FROM city WHERE Name = "Prague" LIMIT 1');

// We getch the data
echo "<hr>";
var_dump($my_record->fetchObject());

// Then we get the object of the query result
$my_record = $my_db_handle->query(
    'SELECT * FROM city WHERE CountryCode = "CZE" ');

// We getch the data
echo "<hr>";
var_dump($my_record->fetchAll());