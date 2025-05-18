<?php

class Student{
    public $name ;
	public $class;
	public $cgpa;

	function __construct($name, $class, $cgpa){
		$this->name = $name;
		$this->class = $class;
		$this->cgpa = $cgpa;
	}

	function displayDetails(){
		echo "Name : " .$this->name ."<br>" ;
		echo "Class : " .$this->class ."<br>" ;
		echo "CGPA : " .$this->cgpa ."<br>" ;
	}


} 

$std1 = new Student("Amar", "TY C", 8);
$std1 -> displayDetails();

?>



