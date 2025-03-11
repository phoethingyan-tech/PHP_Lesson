<?php
//အမွေပေးတာ
//အမွေပေးတဲ့သူရှိရမယ် လက်ခံတဲ့သူရှိရမယ်
//partent class နဲ့ Child Class
// ယူသုံးရလွယ်ကူ Code Resuability
// ပြုပြင်ထိန်းသိမ်းရ လွယ်ကူ Code maintainability
// ချဲ့ထွင်ရလွယ်ကူ Code Scalability

//Composition
//Partent Class
class Animal {
    public $name;

    public function eat() {
        return $this->name." is Eating";
    }

    public function sleep() {
        return $this->name." is sleeping";
    }
}

// Child class
class Dog extends Animal {
    public function bark() {
        return $this->name." says Woof!";
    }
}

class Cat extends Animal {
    public function bark(){ 
        return $this->name." says Meow!";
    }
}

$dog = new Dog();
$dog->name = "Buddy";
echo $dog->bark();
echo "<br>";
echo $dog->eat();
echo "<br>";
echo $dog->sleep();
echo "<br>";

$cat = new Cat();
$cat->name = "Pu Si";
echo $cat->bark();
echo "<br>";
echo $cat->eat();
echo "<br>";
echo $cat->sleep();
echo "<br>";
