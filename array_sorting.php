<?php
echo "<h1>Sort Array Value</h1>";
$programming_languages = ["JavaScript", "PHP", "Python", "Dark", "Java","Go","C++", "C#", "R"];
sort($programming_languages);
foreach($programming_languages as $key => $value) {
    echo "<h3>$value</h3>";
}

echo "<h1>R-Sort Array Value</h1>";
$programming_languages = ["JavaScript", "PHP", "Python", "Dark", "Java","Go","C++", "C#", "R"];
rsort($programming_languages);
foreach($programming_languages as $key => $value) {
    echo "<h3>$value</h3>";
}

echo "<h1>A-Sort Array Value</h1>";
$foods = [
    "breakfast" => "Mohingar",
    "lunch" => "Burmese Rice and Curry",
    "dinner" => "Mala Xianguo"
];
asort($foods);
foreach($foods as $key => $value) {
    echo "<h3>$value</h3>";
}

echo "<h1>K-Sort Array Key</h1>";
ksort($foods);
foreach($foods as $key => $value) {
    echo "<h3>$key</h3>";
}

echo "<h1>AR-Sort Array Value</h1>";
arsort($foods);
foreach($foods as $key => $value) {
    echo "<h3>$value</h3>";
}

echo "<h1>KR-Sort Array Key</h1>";
krsort($foods);
foreach($foods as $key => $value) {
    echo "<h3>$key</h3>";
}

// array adding
$colors = ["Red","Green", "Blue", "Yellow","Gray", "Black", "White"];
print_r($colors);
echo "<br>";
array_push($colors, "Brown");
print_r($colors);
echo "<br>";

array_pop($colors);
print_r($colors);
echo "<br>";
unset($colors[3]);
print_r($colors);
echo "<br>";

// Array To String
echo gettype($colors);
echo "<br>";
$colors_string = implode(',',$colors);
echo $colors_string;
echo "<br>";

//String To Array
$colors_array = explode(',',$colors_string);
print_r($colors_array);
