<?php
$movies=[
    [
        'title' => 'Delta Force',
        'rating' => 62,
        'year' => 1986
    ],
    [
        'title' => 'Missing in action',
        'rating' => 57,
        'year' => 1984
    ],
    [
        'title' => 'Firewalker',
        'rating' => 49,
        'year' => 1986
    ],
];

function sort_movies_by_rating($a, $b)
{
if ($a['rating']=$b['rating']){
    return 0;
}
return ($a['rating'] > $b['rating']) ? -1:1;
}

class sorting_functions{
public static function sort_movies($a, $b)
{
    if ($a['year']=$b['year']){
    return 0;
}
return ($a['year'] < $b['year']) ? -1:1;
}
}

usort($movies,'sort_movies_by_rating');
var_dump($movies);