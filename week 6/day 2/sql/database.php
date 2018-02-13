<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'adrian19061989';

/**
 * connects to a database
 *
 * usese the global variable $db_host,$db_username,$db_password
 *
 * @param string $database - name of the database to connect to
 */

function db_connect($database){

    // import from global variables
    global $db_password;
    global $db_host;
    global $db_username;

    $pdo_connection = new PDO(
        'mysql:dbname='.$database.';host='.$db_host.';charset=utf8',
        $db_username,
        $db_password
    );

    return $pdo_connection;
}

$pdo = db_connect('world');

var_dump($pdo);