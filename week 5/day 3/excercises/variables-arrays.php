<?php
//1.Declare a new variable with the name movie_name and initialize it with the string value Arrival
$movie_name='Arrival';

// 2. Declare a new variable with the name ratings and initialize it with a numerically indexed array with values 69,  and 82
$ratings= [
    69, // 0
    95, // 1
    82 // 2
];

// 3. Write a foreach loop that will go through all the items of the array $ratings. Each item will be available as a variable with the name rating
foreach ($ratings as $rating){

    // 4. Write a function print_rating. It will take one argument named $rating. So far it does nothing.

}
function print_rating($rating){

    // 5. Write code inside the function above so that it echoes a string made of the argument, a space and the % sign. For example 69 %
        echo $rating.' %';
    };

//6.Add specific keys to the array above (turning it into an associative array). The key for value 69 will be user642, The key for value 95 will be user214 and the key for value 82 will be user013
//(Run the loop to see that is still works.)

$ratings = [
    'user642' => 69,
    'user214' => 95,
    'user013' => 85
];

//7.Rewrite the loop so that it now retrieves also the keys from the array. Each key should be available as a variable with the name user_id
$pos =0;
foreach($ratings as $user_id => $rating)
{$pos++;
}

//8.Take this array:

$user_names = [
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
];

//Declare a new variable called user_name and initialize it with the item from that array with the key user214
$user_name = $user_names['user214'];


//9. Write a function get_username. It will take one argument named $user_id and return the users username from the array above.
function get_username($user_id){
    global $user_names; // imports $user_names from global scope
return $user_name($user_id);
}

//10. Rewrite the loop above to now use the function get_username and print a string like Kevin gave the movie a 82 % rating
foreach($ratings as $user_id => $rating){
    echo get_username($user_id).' gave the movie a '.$rating.' %</br>';
}
