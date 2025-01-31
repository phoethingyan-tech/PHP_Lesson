<?php
    //One Condition
    $x = 10;
    $y = 10;
    if($x == $y) {
        echo "<h3>X is equal to Y.</h3>";
    }

    date_default_timezone_set('Asia/Yangon');

    //Two Condition
    $time_now = date("H");
    echo "<h3>$time_now</h3>";
    if($time_now >= 13 && $time_now <=15) {
        echo "<h3>Lecture Time</h3>";
    }else {
        echo "<h3>Free Time</h3>";
    }

    //Many Condition
    $date_now = date("D");
    echo "<h3>$date_now</h3>";
    if($date_now == "Mon"){
        echo "<h3>Today is Monday</h3>";
    }elseif($date_now == "Tue"){
        echo "<h3>Today is Tuesday</h3>";
    }elseif($date_now == "Wed"){
        echo "<h3>Today is Wednesday</h3>";
    }elseif($date_now == "Thu"){
        echo "<h3>Today is Thursday</h3>";
    }elseif($date_now == "Fri"){
        echo "<h3>Today is Super Friday</h3>";
    }else{
        echo "<h3>Today is Holiday</h3>";
    }
?>