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

    function __toString ()
}
?>