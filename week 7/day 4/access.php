<?php


// Initialization part
$dbh = new PDO('mysql:host=localhost;dbname=messages;','root','adrian19061989');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>