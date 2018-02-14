<?php

//require the database library
require_once 'database.php';

$query = "
    SELECT *
    FROM `city`
    WHERE `CountryCode` =  ?
    ORDER BY `Name` ASC
";

$cities = db_query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>

<?php foreach($results as $result) : ?>
<li><?php echo $result['Name']; ?> </li>
<?php endforeach ?>

</ul>

</body>
</html>