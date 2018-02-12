<!-- This autogenerates a table with a link -->

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

<p>
<?php
echo "this is a + b =";
echo $_GET['a']+$_GET['b'],"\n\n\n";
?>
</p>

<pre>
<?php
var_dump($_GET);
?>

</pre>
<table border="1">
<?php for($a=1;$a <=5; $a++){
    echo "<tr>";
    for($b=1;$b <=5; $b++){
        echo "<td>";
        $query_string = http_build_query([
            'a' =>$a,
            'b' => $b,
        ]);
        echo $query_string,
        "<a href='?",$query_string,"'>link</a>",
        "<td>";
    }
    echo "</tr>";
}
?>

</table>

<pre>
<?php
var_dump($_POST);
?>
</pre>

</body>
</html>