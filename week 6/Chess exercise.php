<?php
class piece{
    public $type = null;
    protected $images = [
        'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
        'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
        'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
        'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
        'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
        'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
        'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
        'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
        'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
        'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
        'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
        'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
    ];

    function __construct ($type){
$this->type = $type;

    }

    function __toString (){
        $thestring = $this->images[$this->type];
        return "<img src = {$thestring}>";
    }
}

$black_pawn = new piece('p');
$white_queen = new piece('Q');

// echo $black_pawn;
// echo $white_queen;

class square{
    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;

    function __construct($x,$y,$piece = null){
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece;
    }

    protected function isDark(){
        return ($this->x_coord%2==0 && $this->y_coord%2==0 );
    }

    function __toString(){
        if ($this->isDark()){
    return '<div class="dark">' . $this->piece . '</div>';
        }else {
    return '<div class="light">' . $this->piece . '</div>';
        }
    }
}

class board{
    protected $rowes = null;
    protected $col = null;

// It's __construct method will accept one argument - a multidimensional array of arrays where each item describes one row and contains information about what is or is not in each square.

// <div class="board">
protected function isDark(){
    return ($this->row%2==0 && $this->col%2==0 );
}


function __toString(){
    echo '<div class="board">';
    foreach($this->rowes as $row->$col){
for($this->row=1;$this->row<=8;$this->row++){
    echo '<div class="row">';
    for($this->col=1;$this->col<=8;$this->col++){
        if(isDark()){
            echo '<div class="dark"></div>';
            // var_dump('even');
        }else {
            echo '<div class="light"></div>';
            // var_dump('odd');
        }
    }
    echo '</div>';
}}
}

function __construct($rowes){
    foreach($rowes as $row->$colom){
        $this->x_coord = $row ;
        foreach($colom as $col->$piece){
        $this->y_coord = $col;
        $this->piece = $piece;}
    }
}


}


$a2 = new square(1, 2);
$b2 = new square(2, 2, $white_queen);
$c2 = new square(3, 2, $black_pawn);
$d2 = new square(4, 2);
echo $a2;
echo $b2;
echo $c2;
echo $d2;
$board1 = new board([
    1=>[8=>'r',7=>'p',2=>'P',1=>'R',],
    2=>[8=>'n',7=>'p',2=>'P',1=>'N',],
    3=>[8=>'b',7=>'p',2=>'P',1=>'B',],
    4=>[8=>'q',7=>'p',2=>'P',1=>'Q',],
    5=>[8=>'k',7=>'p',4=>'P',1=>'K',],
    6=>[8=>'b',7=>'p',2=>'P',1=>'B',],
    7=>[8=>'n',7=>'p',2=>'P',1=>'N',],
    8=>[8=>'r',7=>'p',2=>'P',1=>'R',],
]);

// echo $board1;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
<style>
body {
    background-color:beige;
}
.dark{
    background-color:black;
}
.light{
    background-color:white;
}
.board .row {
    overflow: hidden;
}
.board .row > div {
    float: left;
    width: 3em;
    height: 3em;
}
.board .dark {
    background-color: #000000;
}
.board {
        border: 1px, black;
}

</style>



</body>
</html>