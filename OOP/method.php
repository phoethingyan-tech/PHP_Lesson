<?php
// Class ထဲမှာရှိတဲ့ Function ကို Method လို့ခေါ်တယ်

class Car {
    public $brand;

    //method 
    public function drive() {
        return "The ".$this->brand." is driving.";
    }
}

$my_car = new Car();
$my_car->brand = 'Toyota';
echo $my_car->drive();
echo "<br>";

$bro_car = new Car();
$bro_car->brand = "BMW";
echo $bro_car->drive();