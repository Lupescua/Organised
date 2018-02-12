<?php

class user{

public $id;
public $username;
public $name;
public $password;
public $number_of_posts;

public function __construct()
{
    echo "now is new user object created...";
    $this->time_of_construct= time();
}
}


$next_user_id = 0;

class blog_post{

public $id = null;
public $headline = null;
public $text = null;
public $added_at = null;
public $user_id = null;
public $status = 'not-published';

public function publishPost(){
    $this->status = 'published';
}

public function __construct ($title)
{ global $user_id;
    $this->id = $user_id;
    $next_user_id++;
}
}

$steve = new user();
$steve->id =1;
$steve->username = 'steve';
$steve->name = 'Stephen';

echo 'The name of user ' .$steve->id . ' is ' .$steve->name;

// echo "The object of class 'user contains information about person called:" . $steve->name;

$first_post = new blog_post();
$first_post->id = 1;
$first_post->headline = 'The first post';
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->added_at = date('Y-m-d H:i:s');
$first_post->user_id = 1;
$first_post->publishPost();

//Then write HTML code for displaying this blog post. Use the headline, text and added_at properties to print out the required information.

echo '<h1>' . $first_post->headline .'</h1><br /><p>' . $first_post->text . '</p><br />' . $first_post->added_at;


class shop_item{

    public function __construct($item_id){
        //database logic to load  according to $item_id
        // ....
        $this->name =  'Red Shoes';
        $this->price = 1200;
        $this->quantity_on_stock = 5;

    }
}

$red_shoes = new shop_item(12345);


class document
{
protected $page_title;
protected $started_at = null;

public function __construct ($title)
{
    $this->page_title = $title;
    $this->started_at = microtime(true);
}

public function printHeader()
{
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>'.htmlspecialchars($this->page_title).'</title>
    </head>
    <body>' ;
}

    public function printFooter()
    {
        echo '<p>It took '.(microtime(true) - $this->started_at).' miliseconds to render this page.</p>';
    echo '</body>    </html>';

}

}
$page = new document('My superb page');
$page->printHeader();
echo 'my page logic and content';
$page->printFooter();

