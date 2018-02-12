<?php
$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
 //   'gandalf' => 'Gandalf the Grey'
];

//2.To the array $party add a new item under the key 'gandalf', the value will be 'Gandalf the Grey'
$pushed = ['gandalf' => 'Gandalf the Grey'];
var_dump($pushed);
array_push($party, $pushed);
var_dump($party);
echo '<hr>';


//3.Using function unset, remove an item from array $party with the key 'bilbo'
unset($party['bilbo']);
var_dump($party);
// while (list ($key, $val) = each ($party)) {
//     echo "$key -> $val <br>";
//     }
echo '<hr>';

//4.To the array $party add a new item under the key 'sam', the value will be 'Samwise Gamgee'
$party['sam']='Samwise Gamgee';
var_dump($party);
echo '<hr>';


//5.Using function unset, remove an item from array $party with the key 'gandalf'
unset($party['gandalf']);
var_dump($party);
echo '<hr>';

//6. Declare a function leave_hobbiton (no arguments).
function leave_hobbiton(){
    global $party;
    return array_merge($party,[
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
}

//9.Call the function leave_hobbiton
var_dump(leave_hobbiton());
echo '<hr>';

//10. Declare a function go_to_bree. It will take one argument: $party passed by value
function go_to_bree($party){
    $party['strider']='Strider';
    return $party;
}
var_dump(go_to_bree($party));
echo '<hr>';


function  go_to_weathertop(&$party){
    array_merge($party,[
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
    ]);
}
var_dump(go_to_weathertop($party));
echo '<hr>';

//17. Declare a function meet_arwen, making the global variable $party in some way available in it.
function meet_arwen (){
global $party;

//18. Inside the function add an item to the array with key 'arwen' and value 'Arwen Undómiel'
$party['arwen']='Arwen Undómiel';

// 19. Inside the function call the function array_splice. The first argument of array_splice will be the variable $party (or similar that holds the value of the current party), the second will be the number -10, the third will be the number 9.
array_splice($party,-10.9);

};

// 20. Outside of the function call the function meet_arwen. Make sure that calling it changes the value of the global variable $party
meet_arwen();
var_dump($party);
echo '<hr>';

// 21.Declare a function go_to_rivendell (again, make sure that you will be able to change the global variable $party with your approach)

function go_to_rivendell(){
    global $party;
}

?>
