<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class phone
{
    public $number = null;
public function __construct($number){
$this->number= $number;
}
}


class czech_phone extends phone
{
    public function __construct($number){
        parent::__construct($number);
        $this->number= '0042'.$number;
        }
}

$phone = new czech_phone('123456789');
echo $phone->number;
// should yield 0042123456789
?>
