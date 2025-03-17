<?php
// Abstract
// သူ့ Class ထဲမှာ Property နဲ့ method တွေ တည်ဆောက်လို့ရတယ်
// ဒါပေမဲ့ Abstract class တွေက obj တည်ဆောက်လို့မရ

abstract class Shape {
    public $name;

    public function getName() {
        return $this->name;
    }

    abstract public function getArea();
}

class Circle extends Shape {

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        $result = 3.14 * $this->radius * $this->radius;
        return $result;
    }

}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        $result = $this->width * $this->height;
        return $result;
    }
}

function printArea(Shape $shape) {
    echo $shape->getArea();
}

$circle = new Circle(5);
$rectangle = new Rectangle(4,6);

printArea($circle);
echo "<br>";
printArea($rectangle);
