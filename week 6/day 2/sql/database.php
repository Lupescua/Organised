<?php


/// WARNING!!! I could not follow and this code is not full. I tried to write secquences so I won't die completely stupid.



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

    try
{
    $pdo = new PDO(
        'mysql:dbname=' . $database . ';host=' . $db_host . ';charset=utf8',
        $db_username,
        $db_password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo 'Connection failed: ' . $e->getMessage();
}
    // $pdo_connection = new PDO(
    //     'mysql:dbname='.$database.';host='.$db_host.';charset=utf8',
    //     $db_username,
    //     $db_password
    // );

    // return $pdo_connection;

    return $pdo;
}
$pdo = db_connect('world');

function db_query($query,$value =[]){
global $db_database;

$pdo = db_connect($db_database);
}

var_dump($pdo);

$country = 'ROM';
$my_sql_query = "
    SELECT *
    FROM `city`
    WHERE `city`.`CountryCode` = '".$country."'
";

$statement = $pdo->prepare($my_sql_query);
$statement->execute();

// With Fetch Mode the results are arrays not objects
// $statement->setFetchMode(PDO::FETCH_OBJ);
// $statement->setFetchMode(PDO::FETCH_ASSOC);
$statement->setFetchMode(PDO::FETCH_CLASS);

//With fetch All the results are objects not arrays
$results = $statement->fetchAll();
// var_dump( $results);




?>


<ul>
<?php foreach($results as $result) : ?>
<li><?php echo $result['Name']; ?> </li>
<?php endforeach ?>
</ul>

