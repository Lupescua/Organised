<?php
//init part
session_start();

// here action part BEGINS
if (count($_POST)){
    var_dump($_POST);
    $must_int = filter_input(INPUT_POST,'must_int',FILTER_VALIDATE_INT);
    $display_form = filter_input(INPUT_POST,'display',FILTER_VALIDATE_BOOLEAN);

if (false !== $must_int){
    $_SESSION['form_data_recieved_at'] = date('Y-m-d H:i:s');
    $_SESSION['must_int'] = $_POST['must_int'];

    $future_location='Location: ?';
    if ($display_form){
        $future_location = 

    }
    header('Location: ?'); // dont forget to add some logic from the radio name display here)
    die();
}}
// here action part ENDS
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>GET, POST Explained</title>
</head>
<body>
<!-- here is palace for our content -->
<a href="?display=form">Display form</a>
<a href="?">Display none</a>
<?php if (count($_POST))
?>

<?php if (isset($_GET['display']) && $_GET['display'] == 'form'): ?>
<form method="post" action="?display=form">
This must be integer <input type="text" name="must_int"><br>
Display form after successful submition:
<label>
  <input type="radio" name="display" value="yes">yes
</label>
<label>
  <input type="radio" name="display" value="no">no
</label><br>
  <input type="submit" value="Submit my form">
</form>
<?php endif; ?>
<?php if(isset('must_int')==false){
    echo'<input type="text" name="must_int">';
}
?>


</body>
</html>