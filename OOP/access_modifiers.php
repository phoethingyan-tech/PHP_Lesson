<?php

//public - ဘယ်နေရာခေါ်သုံးသုံးရ
// Private -  မိမိ Class အတွင်းမှာသာ သုံးရ
// protect - မိမိ Class အတွင်း extends ယူထားတဲ့ Class တွေမှာသုံးရ

class Person {
    //public property
    public $name;

    // Protect property
    protected $age;

    // Private property
    private $soicalSecurityNumber;

    public function __construct($name, $age, $ssn) {
        $this->name = $name;
        $this->age = $age;
        $this->socialSecurityNumber = $ssn;
    }

    //public method
    public function getName() {
        return $this->name;
    }

    //protected method
    protected function getAge() {
        return $this->age;
    }

    //private method
    private function getSSN() {
        return $this->socialSecurityNumber;
    }

    public function displaySSN() {
        return $this->getSSN();
    }
}

class Employee extends Person {
    public function getEmployeeDetails() {
        return $this->name. " is".$this->getAge()." year old";
    }
}

$person = new Person("Mg Mg", 25, "234-47-3217");

echo $person->getName();
echo "<br>";
echo $person->displaySSN();
echo "<br>";
echo $person->name;

// echo $person->getAge();
// echo $person->getSSN();
// echo $person->age;
// echo $person->socialSecurityNumber;

echo "<br>";
$employee = new Employee("Aung Aung", 32, "213-32-1123");
echo $employee->getEmployeeDetails();