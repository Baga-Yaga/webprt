<?php
class Shape {
    public function area() {
        echo "Calculating area";
    }
}

class Circle extends Shape {
    public function area() {
        echo "Area = πr²";
    }
}

$c = new Circle();
$c->area();
?>
