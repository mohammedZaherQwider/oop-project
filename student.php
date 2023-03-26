<?php 
require('Person.php');
class student extends Person {
    private $gpa;
    private $level;

    public function __construct($name, $age, $gpa, $level) {
        parent::__construct($name, $age);
        $this->gpa = $gpa;
        $this->level = $level;
    } 
    function setGpa($gpa){ 
        $this->gpa=$gpa;
    } 
    function getGpa(){ 
        return $this->gpa;
    } 
    function setlevel($level){ 
        $this->level=$level;
    } 
    function getlevel(){ 
        return $this->level;
    } 
    function toString(){   
        echo "<br>"; 
        echo "Level : ". $this->level ." , ". "  GPA : ". $this->gpa;
    }
}     
$stu=new student("Taher", 23 ,89,3); 
$stu->toString(); 
echo "<br>";
$stu2=new student("Mohammed", 19 ,80,1); 
$stu2->toString(); 
echo "<br>";
$stu3=new student("Ali", 22 ,94,4); 
$stu3->toString(); 
echo "<br>";
?>