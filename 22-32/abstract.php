<?php
abstract class Animal{
    abstract public function makeSound();

    public function eat(){
        echo "Eating ......";
    }
}

class Dog extends Animal {
    public function makeSound(){
        echo "Dog barks ....";
    }
}

$a = new Dog();
$a -> makeSound();
echo "<br>";
$a -> eat();

?>