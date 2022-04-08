<?php
    class Person {
        public $age;
        protected $name;
        protected $email;
        private $uni = "WYU";

        function getName($name = "Default"){                        // Type
            return $this->name = $name;
        }
        function setEmail(){
            $this->email = "John@gmail.com";
        }
        function getEmail($email = "Get Email"){
            return $this->email = $email;
        }
        function getAge($age){                                       //void
            echo $this->age = $age;         
        }
        function uni(){
            return $this->uni;
        }
    }
    $person = new Person();
    echo $person->getName();
    echo "<br>";
    echo $person->getEmail("John@gmail.com");
    echo "<br>";
    $person->getAge(14);
    echo "<br>";
    echo $person->uni();

?>