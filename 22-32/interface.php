<?php
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Dog barks";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Cat meows";
    }
}

$d = new Dog();
$d->makeSound(); // Output: Dog barks

echo "<br>";

$c = new Cat();
$c->makeSound(); // Output: Cat meows
?>
