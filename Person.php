<?php 
class Person { 

    private $age; 
    private $name; 
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function setAge($age){ 
        $this->age=$age;
    } 
    function getAge(){ 
        return $this->age;
    } 
    function setName($name){ 
        $this->name=name;
    } 
    function getName(){ 
        return $this->name;
    }
    function toString(){ 
        echo "Name : ". $this->name ."  , ". " Age : ". $this->age ;
    }
} 
$person = new Person("Mohammed Qwider",19); 
$person->toString(); 
echo "<br>"; 
$person1 = new Person("Ali ",25); 
$person1->toString(); 
echo "<br>"; 
$person2 = new Person("Omer ",15); 
$person2->toString(); 
echo "<br>"; 
?>