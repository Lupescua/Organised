<?php
class dice{
    public $faces;
    public function __construct($faces){
        $this->faces = $faces;
    }
    public function roll(){

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dice Throw Game</title>
</head>
<body>

<form method="post" action="">

    <label for="">Number of dices
<input type="number"/>
</label> </br>

<input type="submit"/>
</form>


<?php
for($i=0;$i<$_POST['number'];$i++){

}

?>

</body>
</html>