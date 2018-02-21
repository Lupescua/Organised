<?php

$pdo = new PDO(
    'mysql:
    host=127.0.0.1;
    dbname=games;
    charset=utf8',
    'root',
    'adrian19061989'
);

$my_sql1 = "SELECT *
FROM `game`
RIGHT JOIN `game_has_genre` ON `game`.`id` = `game_has_genre`.`game_id`
RIGHT JOIN `genre` ON `genre`.`id` = `game_has_genre`.`genre_id`";

$games = $pdo ->prepare($my_sql1);
$games -> execute();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
</head>
<body>
<?php
echo '<div class="game">';
foreach ($games as $game=>$value){
echo '<div class="image">
<img src="'.$value.image_url.'" />
</div>';
echo '<div class="info">';
echo '<h2 class="name">For Honor</h2>';
echo '<div class="release">Released at: 2017-02-13</div>';
echo '<div class="genres">
    <a href="#">Sci-fi</a>
    <a href="#">Fantasy</a>
</div>';
echo '</div>';
}
echo '</div>';


    //     <div class="description">
    //         For Honor is a competitive third-person melee title which mixes speed, strategy and team play with close range combat. The Chosen has survived a thousand years of wandering the southern deserts. Their journey should have wiped them out hundreds of years ago, but they survived thanks to the skill set and focus of their heroes. These individuals hoe to lead their followers to an improbable victory and to establish a new homeland. Striking fear in their enemies, The Warborn warriors sail across the Boiling Sea to raid the southern coast. Known for their fire and passion, they will seek to drive their enemies out of their ancestral lands. On the shoulders of great heroes, The Legions have driven out invaders, conquered any who wouldn\'t join them, and established hundreds of others to defend what is theirs. Facing invasion on two fronts, these heroes fight to protect their lands form the heathens who would take it.
    //     </div>
    //     <div class="rating">77%</div>
    // </div>


?>
</body>
</html>