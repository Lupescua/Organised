
<?php
date_default_timezone_set ('europe/prague');

class match{
public $begins_at = null;
public $score = null;
public $nr_of_players = null;
public $length= null; //in minutes

public function __construct()
{
    $this->begins_at=time();
}

public function getEstimatedEnd(){
    return $this->begins_at+$this->length*60;
}
}


$morning_match = new match();
$morning_match->length = 90;
echo "begining: ",date("H:i:s",$morning_match->begins_at);
echo "<br /> ending:", date("H:i:s",$morning_match->getEstimatedEnd());
echo date_default_timezone_get ();



?>
