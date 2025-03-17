<?php

    // Interface
    // Polymorphism

    interface Animal {
        public function run();
        public function makeSound();
    }

    //  interface ထဲက function တွေက Class ထဲမှာ ပါကိုပါရမယ်

    class Cat implements Animal {
        public function run() {
            return "The cat is running";
        }

        public function makeSound() {
            return "Meow!";
        }
    }

    // $cat = new Cat();
    // echo $cat->run();
    // echo "<br>";
    // echo $cat->makeSound();

    class Dog implements Animal {
        public function run() {
            return "The dog is running";
        }

        public function makeSound() {
            return "Woof!";
        }
    }

    // Polymorphic function
    function action(Animal $animal) {
        echo $animal->run();
    }


    $cat = new Cat();
    $dog = new Dog();
    action($cat);
    echo "<br>";
    action($dog);