<?php

// static property
// static method
// obj တည်ဆောက်စရာမလိုပဲ Class name နဲ့ တိုက်ရိုက်ခေါ်သုံး
// :: = Scope Resolution Operator

class Product {
    //Instance property
    public $name = "Acer";
    public $price = 1200000;

    //static property
    public static $totalProduct = 100;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public static function getTotalProduct() {
        return self:: $totalProduct;
    }
}

$total_products = Product::getTotalProduct();

echo $total_products;