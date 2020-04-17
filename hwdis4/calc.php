<?php
include("autoload.php");

$result = new Square(6);
echo "квадрат:<br>";
echo "периметр квадрата " . $result->perimetr() . "<br>";
echo "площадь квадрата " . $result->area() . "<br>";

$rectangle = new Rectangle(5, 6);
echo "прямоугольник:<br>";
echo "периметр прямоугольника " . $rectangle->perimetr() . "<br>";
echo "площадь прямоугольника " . $rectangle->area() . "<br>";

$triangle = new Triangle(3, 4, 5);
echo "треугольник:<br>";
echo "периметр треугольника " . $triangle->perimetr() . "<br>";
echo "площадь треугольника " . $triangle->area() . "<br>";

$circle = new Circle(5);
echo "окружность:<br>";
echo "периметр окружности " . $circle->perimetr() . "<br>";
echo "площадь окружности " . $circle->area() . "<br>";