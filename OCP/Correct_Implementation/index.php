<?php

require_once("ShapeInterface.php");
require_once("AreaCalculator.php");
require_once("Circle.php");
require_once("Square.php");
require_once("Triangle.php");

$shapes = array(
    new Circle(2),
    new Square(5,5),
    new Triangle(6,6)
);

$area_calculator = new AreaCalculator();
echo $area_calculator->calculate($shapes);
