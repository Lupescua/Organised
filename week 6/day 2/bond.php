<?php

$name = 'James';

$name .= ' Bond';

$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

echo "The name is {$bond_info['last_name']}. {$bond_info['first_name']} {$bond_info['last_name']}.<br>";

echo "One day when I was driving my {$bond_info['car']} in the Alps {$bond_info['enemy']} came along and made me a {$bond_info['relationship_status']}. If only I had my {$bond_info['gun']} with me!<br>";

$bond_info['last_case']= 'Spectre';

class bondCase
{
    protected $name = null;
    protected $year = null;
    protected $enemy = null;

    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    public function getName(){
        return $this->name;
    }

    public function getYear(){
        return $this->year;
    }

    public function getEnemy(){
        return $this->enemy;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function setYear($value){
        $this->year = $value;
    }

    public function setEnemy($value){
        $this->enemy = $value;
    }

    function __construct($year){
        $this->year = $year;
        static::$cases_solved++;
    }
    public static function getAvgGirlsPerCase(){
        if(static::$cases_solved ==0) {return 0;}
        return static::$girls_met/static::$cases_solved ;
    }

    public $girls = [];

    function addGirl($name){
$this->girls[]=$name;
static::$girls_met++;
    }

}

$spectre = new bondCase(2015);
$spectre->name = 'Spectre';
$spectre->enemy = 'Ernst Stavro Blofeld';

$spectre->addGirl('Estrella');
$spectre->addGirl('Lucia Sciarra');
$spectre->addGirl('Madeleine Swann');

var_dump($spectre);

$royale = new bondCase(2006);
$royale->name = 'Casino Royale';
$royale->enemy = 'Le Chiffre';

$royale->addGirl('Vesper Lynd');
$royale->addGirl('Solange Dimitrios');

var_dump($royale);

echo "On average {$bond_info['last_name']} has met {$bond_case::getAvgGirlsPerCase()} girls per case.";