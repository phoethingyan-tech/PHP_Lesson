<?php
    $name = "Hein Min Htet";
    $address = "Mandalay";

    echo $name;
    echo "<br>";
    echo "My name is $name";
    echo "<br>";
    echo 'My name is'.$name;
    echo "<br>";
    echo $name.' live in'.$address;

    $first_name = "Ye";
    $last_name = "Lay";
    echo "<h3>$first_name</h3>";
    $first_name =$last_name;
    echo "<h3>$first_name</h3>";
    $first_name .=$last_name;
    echo "<h3>$first_name</h3>";

    //trim()
    $singer_name =" Htoo Ein Thin";
    echo "<h3>My Favrious Singer is$singer_name.</h3>";
    $trim_name = trim($singer_name);
    echo "<h3>My Favrious Singer is$trim_name</h3>";

    echo strlen($first_name);
    echo "<br>";
    echo strtoupper($singer_name);
    echo "<br>";
    echo strtolower($singer_name);
    echo "<br>";
    echo substr("Hello My Students", 7);
    echo "<br>";
    echo substr("Hello My Students", 6, 2);
    echo "<br>";
    echo substr("Hello My Students", -4);
    echo "<br>";
    // str_replace(search, replace, subject)
    echo str_replace("Mandalay","Smart City","Hello Mandalay");
?>