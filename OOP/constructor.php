<?php

    class Animal{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
    }

    class Dog extends Animal{
        public function greeting(){
            echo "Woof!<br>";
        }
    }

    $dog  = new Animal("Black Kie","Black");
    echo $dog->name."<br>";

    $dog1  = new Dog("Doggie","Brown");
    echo $dog1->greeting();
    echo $dog1->name."<br>";
    echo $dog1->color."<br>";




?>