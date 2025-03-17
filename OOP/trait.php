<?php

// Trailts ထပ်ခါထပ်ခါ ရေးရမယ့် Code တွေကို ရေးမရာမလိုပဲ ခေါ်သုံးဖို့အတွက် သုံးတယ်

trait CanFly {
    public function fly() {
        return "I can fly";
    }
}

trait CanSwim {
    public function swim() {
        return "I can swim";
    }
}

class Duck {
    use CanFly, CanSwim; 
}

class bird {
    use CanFly;
}


$duck = new Duck();
echo $duck->fly();
echo "<br>";
echo $duck->swim();
echo "<br>";

$bird = new Bird();
echo $bird->fly();
