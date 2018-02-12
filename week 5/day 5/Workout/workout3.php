<?php
//3. At the top of the main file add PHP code tags. Inside declare a new variable $page_title and initialize it with the value 'Shopping list'
$page_title = 'Shopping list';

//5.In the PHP code above, declare a new variable $page and initialize it with the value 'home'
$page = 'home';

//6.Right after, add a PHP condition. The expression in the condition should be true if there is set an item with the key 'page' in the array $_GET
if (isset($_GET['page'])){
var_dump(isset($_GET['page']));
echo 'something1';

//7. Within the condition, write code to set the value of the variable $page to the value of the item of array $_GET with key 'page'.
$page =$_GET['page'];
echo 'something2';
var_dump(isset($page));
}

// 16. In the main file, at the top, in PHP code, declare a new variable $items and initialize it as an empty array.
$items=[];


// 17. Right after, add a PHP condition. The expression in the condition should be true when the array $_POST['item'] is not empty.
if (!empty($_POST['item'])){

    //18. Within the condition, var_dump the array $_POST and re-submit the form.
    var_dump($_POST);
    $items = $_POST['item'];

    //19. Still within the condition, assign the value of the array $_POST['item'] to the variable $items
}
echo'<hr>';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
</nav>

<h1><?php
//4. In the body of the document add a <h1> tag and inside echo the text of the variable $page_title
echo $page_title; echo'<hr>';?></h1>

<!-- 8.
Within the body of the document (after the headline) craete an inline PHP condition.

The expression in the condition should be true when the value of $page is equal to 'home'

Within the condition include the home file.-->
<?php
if($page=='home'){
include 'workout3-home.php';}
echo'<hr>';
?>

<!-- 10.
Inside the body of the main file add another condition, similar to the first one.

This time, if the value of $page equals 'form', include the form file. -->
<?php
if($page=='form'){
include 'workout3-form.php';}
echo'<hr>';
?>

</body>
</html>
