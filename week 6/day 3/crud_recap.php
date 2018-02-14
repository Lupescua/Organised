<?php

//in this excercise I use the assignment on week 6, wednesday, CRUD recap with a bit of improvement so I don't have to create a new database

    // Exercise #1 In your text editor write a SQL query that would select a row from the table imdb_movie (city) with the column imdb_id (id) with the value of 97239 (97).
    // Run that query using Adminer or phpMyAdmin
    // Exercise #2
    // Write a php script that would execute the query from the previous exercise and print out the result.

// access the database
$pdo = new PDO(
    'mysql:dbname=world;host=localhost;charset=utf8',
    'root',
    'adrian19061989'
);

var_dump($pdo);
echo '<hr>';


    // Exercise #2
    // Write a php script that would execute the query from the previous exercise and print out the result.
// run a SQL command from the php
//PDO::query() returns a PDOStatement object, or FALSE on failure.

$pdo ->query(
    'SELECT * FROM city WHERE id = "97" LIMIT 1');

    var_dump($pdo);
    echo '<hr>';


    // Exercise #3
    // Write a SQL query that would select all the rows from the table imdb_movie which have the column year with the value 1920.
    // Write a PHP script that would execute the query and print out ALL the results' name columns (or modify the script from the previous exercise).

//PDO::prepare — Prepares a statement for execution and returns a statement object

$my_sql_query = 'SELECT * FROM world WHERE id = "97" LIMIT 1';

//PDOStatement::execute — Executes a prepared statement. Returns TRUE on success or FALSE on failure.
$statement = $pdo->prepare($my_sql_query);
$statement->execute();

// With Fetch Mode the results are arrays not objects
// $statement->setFetchMode(PDO::FETCH_OBJ);
// $statement->setFetchMode(PDO::FETCH_ASSOC);
// $statement->setFetchMode(PDO::FETCH_CLASS);

//With fetch All the results are objects not arrays
$results = $statement->fetchAll();
// var_dump( $results);

var_dump($results);
echo '<hr>';

    // Exercise #4 Write a SQL query that would create a new table imdb_movie_rating with these columns:
    // id
    // imdb_movie_id
    // user_name
    // rating
    // created_at
    // Run that query.

$sql = 'CREATE TABLE `imdb_movie_rating` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `imdb_movie_id` INT NOT NULL ,
    `user_id` INT NOT NULL ,
    `rating` FLOAT NOT NULL ,
    `created_at` DATETIME NULL DEFAULT NULL ,
    PRIMARY KEY (`id`),
    INDEX `imdb_movie_id` (`imdb_movie_id`)
  ) ENGINE = MyISAM;';

$pdo ->query($sql);

    // Exercise #5
    // Write a SQL query that would create a new table user with these columns:
    // id
    // name
    // Run that query.

$sql2 = 'CREATE TABLE `user` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `name` 	varchar NOT NULL ,
    PRIMARY KEY (`id`),
    INDEX `id` (`id`)
    ) ENGINE = MyISAM;';

$pdo ->query($sql2);

// Exercise #6
// Write and run a SQL query that would insert a new user (with your name) into the table user

$pdo ->query("
INSERT
INTO `user` (name)
VALUES ('Adrian')
");
