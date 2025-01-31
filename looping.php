<?php
//For loop
$a = 0;
$b = 0;
for($i = 0; $i < 15; $i++) {
    $a +=10;
    $b +=5;
}

echo "<h3>The Looping end is a = $a and b = $b.</h3>";

//While Loop
$j = 0;
$num = 50;
while($j < 10) {
    $num --;
    $j++;
}
echo "<h3>The Looping end is a = $num and b = $a.</h3>";

//Do while loop
$k = 0;
$n = 50;
do {
    $n++;
    $k++;
}while($k <10);
echo "<h3>The Looping end is a = $n and b = $k.</h3>";

//Foreach loop
$laptops = ["Macbook","lenovo","HP", "Dell", "Acer","Asus"];

foreach($laptops as $key => $value) {
    echo "<h3>Key is $key and Value is $value</h3>";
}