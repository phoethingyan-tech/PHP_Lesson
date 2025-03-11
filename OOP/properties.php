<?php

// properties

class Dog {
    //properties
    public $name;
    public $age;
    public $color;
}

$kout_ya = new Dog();
$kout_ya->name = "kout Ya";
$kout_ya->age = 9;
$kout_ya->color = 'White';
var_dump($kout_ya);
echo "<br>";
echo $kout_ya->age;
echo "<br>";

$aung_net = new Dog();
$aung_net->name = "Aung Net";
$aung_net->age = 8;
$aung_net->color = "Brown";
var_dump($aung_net);
echo "<br>";
echo $aung_net->color;