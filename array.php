<?php
    //Index array
    $laptops = array("Macbook", "Dell", "Lenovo", "HP", "Asus", "Acer");
    print_r($laptops);
    echo "<br>";
    echo $laptops[2];
    echo "<br>";

    $fruits = [];
    $fruits [0] ="Mango";
    $fruits [1] = "Apple";
    $fruits [2] = "Orange";
    print_r($fruits);
    echo "<br>";

    // Assocuative Array
    $students = [
        "name" => "Mg Mg",
        "age" => 23,
        "email" => "mgmg@gmail.com",
        "address" => "Mandalay"
    ];

    print_r($students);
    echo "<br>";
    echo $students["age"];
    echo "<br>";
    echo $students["address"];
    echo "<br>";

    //Multidimensional Array
    $foods = [
        "breakfast" => ["Mohingar","Nan Gyi Thoke","Kaung Myin Paung"],
        "lunch" => ["Shan-style rice", "Rice and Burmese Curry"],
        "dinner" => ["Chapatis and Curry","Kausuetho","Lahpet Thouk"],
    ];

    print_r($foods);
    echo "<br>s";
    print_r($foods["breakfast"]);
    echo "<br>";
    print_r($foods["breakfast"][0]);
