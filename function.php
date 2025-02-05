<?php
//  Function
function myName() {
    echo "<h3>My name is Kyaw Moe Htun.</h3>";
}
myName();

function myBrother($name) {
    echo "<h3>My Brother name is $name.</h3>";
}

$brother_name = "Mg Mg";
myBrother($brother_name);

function  add($num1, $num2) {
    $result = $num1 + $num2;
    return $result;
}

$x = 10;
$y = 20;
$add = add($x, $y);
echo "<h3>The Adding result is $add</h3>";

function myArray($arr) {
    $sub =$arr[0] -$arr[1];
    return $sub;
}

$numbers = [250,140];
$sub = myArray($numbers);
echo "<h3>The sub result is $sub</h3>";

function myNumber($number = 50) {
    echo "<h3>The number is $number</h3>";
}
myNumber();
myNumber(100);