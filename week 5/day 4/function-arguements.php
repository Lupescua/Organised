<?php
$number_of_errors = 0;

/*function log_error() {
    global $number_of_errors;
    $number_of_errors++
} */

function log_error2(&$number_of_errors)
{
    $number_of_errors++;
}

echo '<hr>';

//Exercise
// Declare a variable $messages in the global scope and initialize it's value to an empty array ([])

$messages = [];

// Write a function add_message that would accept one argument - the text of a new message and add that message as the next item to the array $messages

function add_message($messages){
    global $messages;
    $messages[] = $messages;
}
add_message('Foo');

var_dump($messages); // [0 => 'Foo']
echo '<hr>';

function add_message2($message){
    global $messages;
    array_push($messages, $message);
}

add_message('Foo');
add_message('Horray');
var_dump($messages);

echo '<hr>';

//Write a function divmod that would calculate the division of 2 values and at the same time return the remainder (result of the modulus operation).

//It would take three arguments: two numbers passed by value (division operands) and a variable $remainder passed by reference.


function divmod($divident,$divisor,&$modulus){

//The function will return the result of the division of the first two.
if ($divisor == 0) die ('Not possible to divide by 0');
$modulus = $divident % $divisor;
    return $divident / $divisor;
}

//In the third argument it will place the modulus of the first two arguments, effectively returning 2 different values.

//It should work like this:

$result = divmod(3, 2, $modulus);
echo $result.'<br>'; // 1.5
echo $modulus; // 1