<?php  
require('Person.php');
class  employee extends Person{ 
       private $id; 
       private $department;   
       private $hourlyRate;
       private $hoursWorked;

    function __construct($name, $age, $id, $department ,$hourlyRate, $hoursWorked ) {
        parent::__construct($name, $age);
        $this->id = $id;
        $this->department = $department; 
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }
    function setid($id){ 
        $this->id=$id;
    } 
    function getid(){ 
        return $this->id;
    } 
    function setdepartment($department){ 
        $this->department=$department;
    } 
    function getdepartment(){ 
        return $this->$department;
    }  
    function setHourlyRate($hourlyRate){ 
        $this->hourlyRate=$hourlyRate;
    }
    public function getHourlyRate() {
        return $this->hourlyRate;
    }
    function setHoursWorked($hoursWorked){ 
        $this->hoursWorked=$hoursWorked;
    }

    public function getHoursWorked() {
        return $this->hoursWorked;
    }

    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }
    function toString(){      
        echo "<br>";    
        echo "ID : ". $this->id . ", " . "  Department : " .", ". $this->department . ", " ."  Salary : " . $this->calculateSalary();
    }
}
$emp=new employee("Mohammed", 21 ,1, "ASD",10,12);
echo $emp->toString();
echo "<br>"; 
$emp2=new employee("Ali", 25 ,2, "NMB",10,32);
echo $emp2->toString(); 
echo "<br>"; 
$emp3=new employee("Omer", 34 ,3, "ASD",30,27);
echo $emp3->toString();
echo "<br>"; 
?> 