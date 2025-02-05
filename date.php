<?php
echo "<h1>Date</h1>";
$date= date("y-m-d");
echo "<h1>Today is $date</h3>";

echo "<h3>Today is ".date("d.m.Y")."</h3>";
echo "<h3>Today is ".date("m/d/y")."</h3>";
echo "<h3>Today is ".date("d-m-y")."</h3>";
echo "<h3>Today is ".date("d, M,Y")."</h3>";
echo "<h3>Today is ".date("l")."</h3>";

echo "<h1>Time</h1>";
echo "<h3>The Time is ".date("h:i:sa")."</h3>";
echo date_default_timezone_get();

date_default_timezone_set("Asia/Yangon");
echo "<h3>The Time is ".date("h:i:sA")."</h3>";

echo "<h1>String to time</h1>";
$today_strtotime = strtotime(date("d-m-Y"));
echo $today_strtotime;
echo "<br>";
$tomorrow =strtotime("tomorrow");
echo $tomorrow;
echo "<h3>Tomorrow is ".date("d-m-Y",$tomorrow)."</h3>";
echo "<br>";
$next_saturday =strtotime("next Saturday");
echo $next_saturday;
echo "<h3>Next Saturday is ".date("d-m-Y",$next_saturday)."</h3>";
echo "<br>";

$two_weeks =strtotime("+2 weeks");
echo $two_weeks;
echo "<h3>Two Next Weeks is ".date("d-m-Y",$two_weeks)."</h3>";
echo "<br>";

